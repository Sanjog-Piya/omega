<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Models\CombinedOrder;
use Session;
use App\Models\CustomerPackage;
use App\Models\SellerPackage;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaypalController extends Controller
{
    private function getPayPalClient()
    {
        $clientId = env('PAYPAL_CLIENT_ID');
        $clientSecret = env('PAYPAL_CLIENT_SECRET');

        if (get_setting('paypal_sandbox') == 1) {
            $environment = new SandboxEnvironment($clientId, $clientSecret);
        } else {
            $environment = new ProductionEnvironment($clientId, $clientSecret);
        }

        return new PayPalHttpClient($environment);
    }

    private function getAmount()
    {
        $amount = 0;

        if (Session::has('payment_type')) {
            if (Session::get('payment_type') == 'cart_payment') {
                $combined_order = CombinedOrder::findOrFail(Session::get('combined_order_id'));
                $amount = $combined_order->grand_total;
            } elseif (Session::get('payment_type') == 'wallet_payment') {
                $amount = Session::get('payment_data')['amount'];
            } elseif (Session::get('payment_type') == 'customer_package_payment') {
                $customer_package = CustomerPackage::findOrFail(Session::get('payment_data')['customer_package_id']);
                $amount = $customer_package->amount;
            } elseif (Session::get('payment_type') == 'seller_package_payment') {
                $seller_package = SellerPackage::findOrFail(Session::get('payment_data')['seller_package_id']);
                $amount = $seller_package->amount;
            }
        }

        return $amount;
    }

public function createOrder(Request $request)
{
    try {
        // Get amount - from request or session fallback
        if ($request->has('amount') && $request->amount > 0) {
            $amount = $request->amount;
        } else {
            $amount = $this->getAmount();
        }

        // Get currency - from request or system setting fallback
        if ($request->has('currency') && !empty($request->currency)) {
            $currency = $request->currency;
        } else {
            $currency = \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code;
        }

        if ($amount <= 0) {
            return response()->json(['error' => 'Could not retrieve order amount.'], 422);
        }

        $client = $this->getPayPalClient();

        $orderRequest = new OrdersCreateRequest();
        $orderRequest->prefer('return=representation');
        $orderRequest->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => uniqid(),
                "amount" => [
                    "value" => number_format((float)$amount, 2, '.', ''),
                    "currency_code" => $currency
                ]
            ]]
        ];

        $response = $client->execute($orderRequest);

        return response()->json([
            'id' => $response->result->id
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
}

public function captureOrder(Request $request)
{
    try {
        $orderID = $request->orderID;
        $client = $this->getPayPalClient();

        $ordersCaptureRequest = new OrdersCaptureRequest($orderID);
        $ordersCaptureRequest->prefer('return=representation');
        $response = $client->execute($ordersCaptureRequest);

        $redirectUrl = route('home'); // fallback

        // Get payment type from request first, then session fallback
        $paymentType = $request->payment_type ?? Session::get('payment_type');
        
        // Get combined order id from request first, then session fallback
        $combinedOrderId = $request->combined_order_id ?? Session::get('combined_order_id');

        \Log::info('PayPal Capture:', [
            'payment_type' => $paymentType,
            'combined_order_id' => $combinedOrderId
        ]);

        if (!$paymentType) {
            return response()->json([
                'status' => 'error',
                'message' => 'Payment type not found. Please try again.'
            ], 422);
        }

        if ($paymentType == 'cart_payment') {

            if (!$combinedOrderId) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Order ID not found. Please try again.'
                ], 422);
            }

            $checkoutController = new CheckoutController;
            $checkoutController->checkout_done(
                $combinedOrderId,
                json_encode($response)
            );

            $redirectUrl = route('order_confirmed', ['id' => $combinedOrderId]);

        } elseif ($paymentType == 'wallet_payment') {
            $walletController = new WalletController;
            $walletController->wallet_payment_done(
                Session::get('payment_data'),
                json_encode($response)
            );
            $redirectUrl = route('wallet');

        } elseif ($paymentType == 'customer_package_payment') {
            $customerPackageController = new CustomerPackageController;
            $customerPackageController->purchase_payment_done(
                Session::get('payment_data'),
                json_encode($response)
            );
            $redirectUrl = route('dashboard');

        } elseif ($paymentType == 'seller_package_payment') {
            $sellerPackageController = new SellerPackageController;
            $sellerPackageController->purchase_payment_done(
                Session::get('payment_data'),
                json_encode($response)
            );
            $redirectUrl = route('dashboard');
        }

        return response()->json([
            'status' => 'success',
            'redirect_url' => $redirectUrl
        ]);

    } catch (\Exception $e) {
        \Log::error('PayPal captureOrder error: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
}

    public function getDone(Request $request)
    {
        try {
            $client = $this->getPayPalClient();

            $ordersCaptureRequest = new OrdersCaptureRequest($request->token);
            $ordersCaptureRequest->prefer('return=representation');
            $response = $client->execute($ordersCaptureRequest);

            if ($request->session()->has('payment_type')) {
                if ($request->session()->get('payment_type') == 'cart_payment') {
                    $checkoutController = new CheckoutController;
                    return $checkoutController->checkout_done(
                        $request->session()->get('combined_order_id'),
                        json_encode($response)
                    );
                } elseif ($request->session()->get('payment_type') == 'wallet_payment') {
                    $walletController = new WalletController;
                    return $walletController->wallet_payment_done(
                        $request->session()->get('payment_data'),
                        json_encode($response)
                    );
                } elseif ($request->session()->get('payment_type') == 'customer_package_payment') {
                    $customerPackageController = new CustomerPackageController;
                    return $customerPackageController->purchase_payment_done(
                        $request->session()->get('payment_data'),
                        json_encode($response)
                    );
                } elseif ($request->session()->get('payment_type') == 'seller_package_payment') {
                    $sellerPackageController = new SellerPackageController;
                    return $sellerPackageController->purchase_payment_done(
                        $request->session()->get('payment_data'),
                        json_encode($response)
                    );
                }
            }
        } catch (\Exception $e) {
            flash(translate('Payment failed: ' . $e->getMessage()))->error();
            return redirect()->route('home');
        }
    }

    public function getCancel(Request $request)
    {
        $request->session()->forget('order_id');
        $request->session()->forget('payment_data');
        flash(translate('Payment cancelled'))->success();
        return redirect()->route('home');
    }
}