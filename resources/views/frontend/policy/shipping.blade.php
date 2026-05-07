@extends('layouts.master')
@section('title', 'Shipping Policy')
@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-start">
                        <ul class="breadcrumb-url">
                            <li class="breadcrumb-url-li">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-url-li">
                                <span>Shipping Policy</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row ptb--40 ptb-md--30 ptb-sm--20">
                    <div class="col-lg-12 col-md-12">
                        <div class="about-text">
                            <h2 class="heading-secondary mb-4"><strong>Shipping Policy</strong></h2>

                            <p class="text-secondary lh-base">This Shipping Policy applies to purchases made through the
                                Ranayas website and mobile applications available on Android and iOS platforms.</p>

                            <h4 class="mt-4 mb-2"><strong>Order Processing</strong></h4>
                            <p class="text-secondary lh-base">All orders are usually processed within <strong>1–2 business
                                    days</strong> after successful payment confirmation.</p>
                            <p class="text-secondary lh-base">Orders are not processed, shipped, or delivered on Sundays,
                                public holidays, or non-working business days.</p>
                            <p class="text-secondary lh-base">In cases of high order volume, operational delays, natural
                                disruptions, courier delays, or unforeseen circumstances, shipments may be delayed.
                                Customers will be informed via email, SMS, or phone call if there is a significant delay.
                            </p>

                            <h4 class="mt-4 mb-2"><strong>Shipping Charges</strong></h4>
                            <p class="text-secondary lh-base">Shipping charges are calculated during checkout based on
                                delivery location, package weight, and shipping method selected. Any additional
                                delivery-related charges imposed by remote locations or courier partners may be applicable.
                            </p>

                            <h4 class="mt-4 mb-2"><strong>Estimated Delivery Timelines</strong></h4>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Standard Shipping: <strong>5–7 Business
                                        Days</strong></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Expedited Shipping: <strong>2–3 Business
                                        Days</strong></li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Express Shipping: <strong>1–2 Business
                                        Days</strong></li>
                            </ul>
                            <p class="text-secondary lh-base">Delivery timelines are estimated and may vary depending on
                                customer location, weather conditions, courier availability, government restrictions, or
                                other external factors beyond our control.</p>

                            <h4 class="mt-4 mb-2"><strong>Shipment Confirmation & Tracking</strong></h4>
                            <p class="text-secondary lh-base">Once your order is shipped, you will receive a shipment
                                confirmation via email, SMS, or WhatsApp containing your tracking details. Tracking details
                                may take up to 24 hours to become active.</p>

                            <h4 class="mt-4 mb-2"><strong>Customs, Duties, and Taxes</strong></h4>
                            <p class="text-secondary lh-base">Ranayas is not responsible for any customs duties, taxes,
                                import charges, tariffs, or additional fees imposed during or after shipping. Any such
                                charges levied by local authorities, customs departments, or courier agencies shall be borne
                                solely by the customer.</p>

                            <h4 class="mt-4 mb-2"><strong>Damaged or Lost Shipments</strong></h4>
                            <p class="text-secondary lh-base">Ranayas is not responsible for products damaged or lost during
                                shipping transit. Customers are advised to contact the courier company directly for claims.
                                Please retain all packaging materials and damaged products for verification purposes.</p>

                            <h4 class="mt-4 mb-2"><strong>International Shipping</strong></h4>
                            <p class="text-secondary lh-base">Currently, we ship only within India.</p>

                            <hr class="mt-5 mb-4">
                            <h4 class="mb-3"><strong>Contact Us</strong></h4>
                            <address>
                                <p class="color--light-3">Email: <a href="mailto:info@ranayas.com">info@ranayas.com</a></p>
                                <p class="color--light-3">Phone: <a href="tel:+919820760951">+91 9820760951</a></p>
                            </address>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
