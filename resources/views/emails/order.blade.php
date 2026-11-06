<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>

<body style="margin:0; padding:0; background:#f4f6f7; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f4f6f7; padding:20px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" border="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">

    <!-- HEADER -->
    <tr>
        <td style="background:#3f7d73; padding:20px; text-align:center;">
            <img src="https://fridayintl.com/public/assets/images/flogo.png" style="
    width: 100px;
    background: white;
    padding: 20px;
    margin-bottom: 20px;
">
            <h2 style="color:#ffffff; margin:0;">Friday International</h2>
        </td>
    </tr>

    <!-- TITLE -->
    <tr>
        <td align="center" style="padding:30px 20px;">
            <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" width="80">

            <h2 style="margin:15px 0 10px; color:#333;">ORDER CONFIRMATION</h2>

            <p style="color:#777; font-size:14px; line-height:22px;">
                Hello {{ $array['order']->user->name ?? $array['order']->guest_name }}, <br><br>
                Thank you for your order. Your purchase has been successfully confirmed.
            </p>

            <a href="{{ url('/') }}" style="display:inline-block; margin-top:20px; padding:12px 25px; background:#3f7d73; color:#ffffff; text-decoration:none; border-radius:4px; font-weight:bold;">
                Visit Website
            </a>
        </td>
    </tr>

    <!-- ORDER DETAILS -->
    <tr>
        <td style="padding:20px 30px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #eee; border-radius:6px;">

                <!-- ORDER HEADER -->
                <tr>
                    <td style="padding:15px; border-bottom:1px solid #eee;">
                        <strong>ORDER NO:</strong> #{{ $array['order']->code }}
                    </td>
                    <td align="right" style="padding:15px; border-bottom:1px solid #eee;">
                        <strong>Date:</strong> {{ date('d M Y', strtotime($array['order']->created_at)) }}
                    </td>
                </tr>

                <!-- PRODUCTS LOOP -->
                @foreach($array['order']->orderDetails as $item)
                <tr>
                    <td colspan="2" style="padding:15px; border-bottom:1px solid #f1f1f1;">
                        <table width="100%">
                            <tr>
                                <td>
                                    <strong>{{ $item->product->name }}</strong><br>
                                    Qty: {{ $item->quantity }}
                                </td>
                                <td align="right">
                                    <strong>¥ {{ number_format($item->price, 2) }}</strong>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @endforeach

                <!-- TOTALS -->
                <tr>
                    <td colspan="2" style="padding:15px; border-top:1px dashed #ddd;">
                        <table width="100%">
                            <tr>
                                <td>Subtotal</td>
<td align="right">
    {{ single_price($array['order']->orderDetails->sum('price')) }}
</td>                            </tr>

                            <tr>
                                <td>Shipping</td>
                                <td align="right">
                                    {{ $array['order']->shipping_cost > 0 ? '¥'.number_format($array['order']->shipping_cost,2) : 'Free' }}
                                </td>
                            </tr>

                            <tr>
                                <td>Discount</td>
                                <td align="right">
                                    ¥ {{ number_format($array['order']->discount ?? 0, 2) }}
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-top:10px;"><strong>Total</strong></td>
                                <td align="right" style="padding-top:10px;">
                                    <strong>¥ {{ number_format($array['order']->grand_total, 2) }}</strong>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            

            </table>
        </td>
    </tr>

    <!-- SUPPORT -->
    <tr>
        <td style="padding:25px; background:#f6c35b; text-align:center;">
            <h3 style="margin:0 0 10px;">Have Questions About Your Order?</h3>
            <p style="font-size:14px; color:#333;">
                Contact our support team anytime.
            </p>

            <a href="{{ url('/contact') }}" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#ffffff; color:#333; text-decoration:none; border-radius:4px; font-weight:bold;">
                Contact Support
            </a>
        </td>
    </tr>

    <!-- FOOTER -->
    <tr>
        <td style="padding:15px; text-align:center; font-size:12px; color:#999;">
            © {{ date('Y') }} Friday International. All rights reserved.
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>