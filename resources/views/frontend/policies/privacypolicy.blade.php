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
                <h1 class="fw-600 h4">Privacy Policy</h1>
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
                            {{ translate('Privacy Policy') }}
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

           <h2 class="h5 mb-4">Privacy Policy | Friday Super Market Japan</h2>

            <p><strong>Last Updated:</strong> June 2026</p>

            <p>
                Friday Super Market ("we," "our," or "us") respects your privacy and is committed
                to protecting your personal information. This Privacy Policy explains how we collect,
                use, store, and protect information when you visit or use our website,
                https://fridayintl.com.
            </p>

            <p>
                By using our website, you agree to the practices described in this Privacy Policy.
            </p>

            <h5>Information We Collect</h5>

            <p>We may collect the following information:</p>

            <h6>Personal Information</h6>

            <p>
                When placing an order, creating an account, subscribing to updates, or contacting us,
                we may collect:
            </p>

            <ul>
                <li>Full name</li>
                <li>Email address</li>
                <li>Telephone number</li>
                <li>Delivery address</li>
                <li>Post code</li>
                <li>Billing address</li>
                <li>Order information</li>
            </ul>

            <h6>Website Usage Information</h6>

            <p>We may automatically collect:</p>

            <ul>
                <li>IP address</li>
                <li>Browser type</li>
                <li>Device information</li>
                <li>Operating system</li>
                <li>Website activity and usage data</li>
                <li>Referring website information</li>
            </ul>

            <h5>How We Use Your Information</h5>

            <p>We use collected information to:</p>

            <ul>
                <li>Process and deliver orders</li>
                <li>Communicate with customers</li>
                <li>Respond to inquiries and support requests</li>
                <li>Improve our products and services</li>
                <li>Enhance website performance and user experience</li>
                <li>Prevent fraud and unauthorized activity</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h5>Payment Information</h5>

            <p>
                Payments may be processed through secure third-party payment providers.
                Currently, we use PayPal for online payments. Customers may also choose
                Cash on Delivery (COD) where available.
            </p>

            <p>
                Friday Super Market does not store or retain complete credit card information
                on its servers.
            </p>

            <h5>Cookies and Tracking Technologies</h5>

            <p>
                Our website may use cookies and similar technologies to:
            </p>

            <ul>
                <li>Remember customer preferences</li>
                <li>Improve website functionality</li>
                <li>Analyze website traffic</li>
                <li>Measure marketing performance</li>
            </ul>

            <p>
                Users may disable cookies through browser settings; however,
                some website features may not function properly.
            </p>

            <h5>Google Analytics and Third-Party Services</h5>

            <p>We may use services such as:</p>

            <ul>
                <li>Google Analytics</li>
                <li>Google Search Console</li>
                <li>Google Merchant Center</li>
                <li>Google Business Profile</li>
                <li>Social media platforms</li>
            </ul>

            <p>
                These services may collect anonymous usage data in accordance with
                their own privacy policies.
            </p>

            <h5>Information Sharing</h5>

            <p>
                We do not sell, rent, or trade customer personal information.
            </p>

            <p>
                Information may be shared only when necessary with:
            </p>

            <ul>
                <li>Delivery companies</li>
                <li>Payment processors</li>
                <li>Technology service providers</li>
                <li>Government authorities when required by law</li>
            </ul>

            <h5>Data Security</h5>

            <p>
                We implement reasonable technical and organizational measures to protect
                customer information from unauthorized access, misuse, disclosure, or alteration.
            </p>

            <p>
                While we strive to protect personal information, no internet transmission
                or storage system can be guaranteed to be 100% secure.
            </p>

            <h5>Customer Rights</h5>

            <p>Customers may request:</p>

            <ul>
                <li>Access to their personal information</li>
                <li>Correction of inaccurate information</li>
                <li>Deletion of personal information where legally permitted</li>
            </ul>

            <p>
                Requests may be submitted using the contact information below.
            </p>

            <h5>External Links</h5>

            <p>
                Our website may contain links to third-party websites.
                We are not responsible for the privacy practices or content of external websites.
            </p>

            <h5>Children's Privacy</h5>

            <p>
                Our website is not intended for children under the age of 13.
                We do not knowingly collect personal information from children.
            </p>

            <h5>Changes to This Privacy Policy</h5>

            <p>
                Friday Super Market reserves the right to modify this Privacy Policy at any time.
            </p>

            <p>
                Updated versions will be published on this page with a revised effective date.
            </p>

            <h5>Contact Information</h5>

            <p>
                If you have questions regarding this Privacy Policy, please contact:
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

        </div>
    </div>
</section>

@endsection