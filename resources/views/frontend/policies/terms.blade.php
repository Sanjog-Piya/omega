@extends('frontend.layouts.app')

<style>
    h5,h6{
            font-size: 18px !important;
    margin: 10px 0 !important;
    }
    .terms li {
    list-style: disc;
    margin: 0;
    padding: 0;
    margin-left: 20px;
}
</style> 

@section('content')
@php
    $terms =  \App\Models\Page::where('type', 'terms_conditions_page')->first();
@endphp
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h5">{{ $terms->getTranslation('title') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('terms') }}">"{{ translate('Terms & conditions') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4 terms">
    <div class="container">
     <div class="bg-white rounded shadow-sm overflow-hidden mw-100 text-left p-4">

     <h2 class="h5 mb-4">Terms and Conditions | Friday Super Market Japan</h2>

    <p><strong>Last Updated:</strong> June 2026</p>

    <p>
        Welcome to Friday Super Market. These Terms and Conditions govern your use of our website,
        https://fridayintl.com, and the purchase of products through our online store.
    </p>

    <p>
        By accessing or using our website, you agree to be bound by these Terms and Conditions.
        If you do not agree with any part of these terms, please discontinue use of the website.
    </p>

    <h5>About Us</h5>

    <p>
        Friday Super Market is an international grocery store located in Sakura, Chiba, Japan.
        We offer groceries, frozen foods, beverages, spices, household products, and other consumer
        goods through our physical store and online platform.
    </p>

    <h5>Website Use</h5>

    <p>Users agree to:</p>

    <ul>
        <li>Use the website for lawful purposes only.</li>
        <li>Provide accurate and complete information when placing orders.</li>
        <li>Not engage in activities that may disrupt website functionality or security.</li>
        <li>Not attempt unauthorized access to website systems or data.</li>
    </ul>

    <h5>Product Information</h5>

    <p>
        We strive to ensure that product descriptions, prices, images, and availability are accurate.
    </p>

    <p>
        However, we do not guarantee that all information is free from errors. Friday Super Market
        reserves the right to correct errors, update information, or modify product details without
        prior notice.
    </p>

    <p>
        Product images are provided for illustration purposes only, and actual packaging may vary.
    </p>

    <h5>Pricing</h5>

    <p>All prices displayed on the website are listed in Japanese Yen (JPY).</p>

    <ul>
        <li>Prices may change without prior notice.</li>
        <li>In the event of a pricing error, Friday Super Market reserves the right to cancel or refuse affected orders.</li>
    </ul>

    <h5>Orders</h5>

    <p>By placing an order, customers confirm that:</p>

    <ul>
        <li>They are legally authorized to make purchases.</li>
        <li>The information provided is accurate.</li>
        <li>The delivery address is correct and complete.</li>
    </ul>

    <p>
        Friday Super Market reserves the right to refuse, cancel, or limit orders at its discretion.
    </p>

    <p>Orders may be cancelled if:</p>

    <ul>
        <li>Incorrect information is provided.</li>
        <li>Products are unavailable.</li>
        <li>Payment authorization fails.</li>
        <li>Fraudulent activity is suspected.</li>
    </ul>

    <h5>Payments</h5>

    <p>
        Payments must be completed using the payment methods available on the website.
    </p>

    <p>
        Orders will be processed only after successful payment confirmation.
    </p>

    <p>
        Friday Super Market does not store complete credit card information on its servers.
    </p>

    <h5>Delivery</h5>

    <p>Delivery is available within Japan only.</p>

    <p>
        Orders are shipped through Sagawa Transportation and other approved delivery partners.
    </p>

    <p>Delivery times may be affected by:</p>

    <ul>
        <li>Weather conditions</li>
        <li>Traffic conditions</li>
        <li>Natural disasters</li>
        <li>Public holidays</li>
        <li>Transportation disruptions</li>
    </ul>

    <p>
        Friday Super Market is not liable for delays caused by circumstances beyond our reasonable control.
    </p>

    <p>
        Frozen products are transported using frozen logistics systems designed to maintain product quality.
    </p>

    <h5>Returns and Refunds</h5>

    <p>
        Returns, refunds, and replacements are governed by our Return, Refund and Delivery Policy.
    </p>

    <p>
        Customers are encouraged to review that policy before placing an order.
    </p>

    <h5>Customer Responsibilities</h5>

    <p>Customers are responsible for:</p>

    <ul>
        <li>Providing accurate order information.</li>
        <li>Inspecting products upon delivery.</li>
        <li>Properly storing products after receipt.</li>
        <li>Following product usage and storage instructions.</li>
    </ul>

    <h5>Intellectual Property</h5>

    <p>
        All website content, including logos, text, graphics, images, designs, trademarks,
        and other materials, is the property of Friday Super Market or its licensors.
    </p>

    <p>
        Unauthorized copying, reproduction, modification, distribution, or commercial use
        of any content is strictly prohibited without prior written permission.
    </p>

    <h5>Limitation of Liability</h5>

    <p>
        To the fullest extent permitted by law, Friday Super Market shall not be liable for:
    </p>

    <ul>
        <li>Indirect or consequential damages.</li>
        <li>Business interruption.</li>
        <li>Loss of profits.</li>
        <li>Delays caused by third-party service providers.</li>
        <li>Events beyond our reasonable control.</li>
    </ul>

    <p>
        Our total liability shall not exceed the amount paid for the relevant order.
    </p>

    <h5>Privacy</h5>

    <p>
        Customer information is handled in accordance with our Privacy Policy.
    </p>

    <p>
        By using our website, you consent to the collection and processing of information
        as described in the Privacy Policy.
    </p>

    <h5>Changes to Terms</h5>

    <p>
        Friday Super Market reserves the right to update or modify these Terms and Conditions
        at any time.
    </p>

    <p>
        Updated versions will be posted on this page and become effective immediately upon publication.
    </p>

    <h5>Governing Law</h5>

    <p>
        These Terms and Conditions shall be governed by and interpreted in accordance with the laws of Japan.
    </p>

    <p>
        Any disputes arising from the use of this website shall be subject to the exclusive jurisdiction
        of the appropriate courts in Japan.
    </p>

    <h5>Contact Information</h5>

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
        <a href="https://fridayintl.com" target="_blank">https://fridayintl.com</a>
    </p>

</div>
    </div>
</section>
@endsection 
