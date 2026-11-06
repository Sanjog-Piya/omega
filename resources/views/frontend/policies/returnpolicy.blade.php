@extends('frontend.layouts.app')

<style>
    h5,h6{
        font-size:18px !important;
        margin:10px 0 !important;
    }

    .policy li{
        list-style:disc; 
        margin-left:20px;
    }
</style>

@section('content')

<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h5">Return, Refund and Delivery Policy</h1>
            </div>

            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">
                            {{ translate('Home') }}
                        </a>
                    </li>

                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="#">
                            {{ translate('Return, Refund and Delivery Policy') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mb-4 policy">
    <div class="container">
        <div class="bg-white rounded shadow-sm overflow-hidden mw-100 text-left p-4">

            <h2 class="h5 mb-4">Return, Refund and Delivery Policy | Friday Super Market Japan</h2>

            <p><strong>Last Updated:</strong> June 2026</p>

            <p>
                Welcome to Friday Super Market. We are committed to providing quality groceries,
                international foods, frozen products, and household essentials to customers throughout Japan.
                Please read our delivery, return, and refund policy carefully before placing an order.
            </p>

            <h5>Delivery Information</h5>

            <p>
                Friday Super Market delivers products throughout Japan using Sagawa Transportation
                and other trusted delivery partners.
            </p>

            <h6>Delivery Area</h6>

            <ul>
                <li>Delivery is available only within Japan.</li>
                <li>We currently do not offer international shipping.</li>
            </ul>

            <h6>Delivery Time</h6>

            <p>Delivery times may vary depending on:</p>

            <ul>
                <li>Weather conditions</li>
                <li>Natural disasters</li>
                <li>Traffic conditions</li>
                <li>Public holidays</li>
                <li>Transportation delays</li>
                <li>Product availability</li>
            </ul>

            <p>
                Friday Super Market is not responsible for delays caused by circumstances beyond our control.
            </p>

            <h6>Frozen Product Delivery</h6>

            <p>
                Frozen products are transported using appropriate frozen logistics systems and maintained
                at approximately -18°C to preserve quality and freshness during delivery.
            </p>

            <h6>Incorrect Address Information</h6>

            <p>
                Customers are responsible for providing accurate delivery information.
            </p>

            <p>Orders may be delayed, returned, or cancelled if:</p>

            <ul>
                <li>The shipping address is incomplete.</li>
                <li>The postal code is incorrect.</li>
                <li>Contact information is inaccurate.</li>
                <li>The delivery address cannot be located.</li>
            </ul>

            <p>
                Additional shipping charges may apply for re-delivery requests caused by incorrect customer information.
            </p>

            <h5>Return Policy</h5>

            <p>
                Customer satisfaction is important to us. If you are not satisfied with your purchase,
                you may request a return under the conditions described below.
            </p>

            <h6>Eligible Returns</h6>

            <p>
                Customers may return unopened and unused products within 5 days of receiving the order if:
            </p>

            <ul>
                <li>The product remains in its original condition.</li>
                <li>The original packaging is intact.</li>
                <li>The product seal has not been opened.</li>
                <li>The product has not been damaged or altered.</li>
            </ul>

            <h6>Non-Returnable Products</h6>

            <p>
                For food safety and hygiene reasons, we cannot accept returns for:
            </p>

            <ul>
                <li>Opened products</li>
                <li>Used products</li>
                <li>Fresh foods</li>
                <li>Frozen foods</li>
                <li>Perishable items</li>
                <li>Products with broken seals</li>
                <li>Products damaged after delivery</li>
            </ul>

            <h6>Wrong Product or Shipping Error</h6>

            <p>If you receive:</p>

            <ul>
                <li>An incorrect product</li>
                <li>A damaged product</li>
                <li>A defective product</li>
                <li>A product different from what was ordered</li>
            </ul>

            <p>
                Please contact us immediately within 48 hours of delivery.
            </p>

            <p>
                In approved cases, Friday Super Market will provide a replacement product or refund
                at no additional cost to the customer.
            </p>

            <h6>Return Shipping Costs</h6>

            <p><strong>When Friday Super Market Pays</strong></p>

            <ul>
                <li>The wrong item was shipped.</li>
                <li>The product arrived damaged.</li>
                <li>The product was defective upon arrival.</li>
            </ul>

            <p><strong>When the Customer Pays</strong></p>

            <ul>
                <li>The product was ordered by mistake.</li>
                <li>The customer changes their mind.</li>
                <li>The return is requested for personal reasons.</li>
                <li>The product is returned despite being delivered correctly.</li>
            </ul>

            <h5>Refund Process</h5>

            <p>
                After receiving and inspecting the returned item:
            </p>

            <ul>
                <li>Approved refunds will be processed to the original payment method.</li>
                <li>Refund processing may require 5–10 business days depending on the payment provider.</li>
                <li>Shipping charges are generally non-refundable unless the return resulted from our error.</li>
            </ul>

            <h5>Contact Us</h5>

            <p>
                For return requests, refund inquiries, or delivery assistance, please contact:
            </p>

            <p>
                <strong>Friday Super Market</strong>
            </p>

            <p>
                <strong>Address:</strong><br>
                4 Chome-1-13 Ojidai<br>
                Sakura, Chiba 285-0837<br>
                Japan
            </p>

            <p>
                <strong>Phone:</strong><br>
                043-290-9122
            </p>

            <p>
                <strong>Email:</strong><br>
                <a href="mailto:info@fridayintl.com">info@fridayintl.com</a>
            </p>

            <p>
                <strong>Website:</strong><br>
                <a href="https://fridayintl.com" target="_blank">
                    https://fridayintl.com
                </a>
            </p>

            <h5>Policy Updates</h5>

            <p>
                Friday Super Market reserves the right to update this policy at any time without prior notice.
                Changes will be published on this page and become effective immediately upon publication.
            </p>

            <p>
                <strong>Last Updated:</strong> June 2026
            </p>

        </div>
    </div>
</section>

@endsection
