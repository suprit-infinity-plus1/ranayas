@extends('layouts.master')
@section('title', 'Return & Refund Policy')
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
                                <span>Return & Refund Policy</span>
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
                            <h2 class="heading-secondary mb-4"><strong>Return & Refund Policy</strong></h2>

                            <p class="text-secondary lh-base">At Ranayas, customer satisfaction is important to us. If you
                                are not completely satisfied with your purchase, please review our Return & Refund Policy
                                below.</p>

                            <h4 class="mt-4 mb-2"><strong>Return Eligibility</strong></h4>
                            <p class="text-secondary lh-base">Returns are accepted within <strong>7 days</strong> from the
                                date of delivery. To be eligible for a return:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> The product must be unused and in
                                    original condition.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Original packaging, tags, labels,
                                    freebies, and accessories must be intact.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> The product should not be damaged,
                                    altered, or tampered with.</li>
                            </ul>

                            <h4 class="mt-4 mb-2"><strong>Non-Returnable Conditions</strong></h4>
                            <p class="text-secondary lh-base">Returns will not be accepted if:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> The product has been used or damaged.
                                </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Original packaging or tags are missing.
                                </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Barcode or security seal is tampered
                                    with.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Return request is raised after 7 days
                                    from delivery.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Free gifts or promotional items are not
                                    returned.</li>
                            </ul>

                            <h4 class="mt-4 mb-2"><strong>Damaged, Defective, or Incorrect Products</strong></h4>
                            <p class="text-secondary lh-base">If you receive a damaged, defective, or incorrect product,
                                please contact us within <strong>72 hours</strong> of delivery.</p>

                            <h4 class="mt-4 mb-2"><strong>Return Process</strong></h4>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Email us at <a
                                        href="mailto:info@ranayas.com">info@ranayas.com</a> with your Order ID.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Share clear images of the product and
                                    packaging.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Our team will review your request.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> If approved, you will be instructed
                                    regarding the return process.</li>
                            </ul>
                            <p class="text-secondary lh-base">Please ensure the product is returned in original packaging
                                with all accessories and labels intact.</p>

                            <h4 class="mt-4 mb-2"><strong>Refund Policy</strong></h4>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Refunds are processed after inspection
                                    and approval of the returned product.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Shipping charges and return shipping
                                    costs may be deducted from the refund amount.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Refunds are generally processed within
                                    10–15 business days.</li>
                            </ul>

                            <h4 class="mt-4 mb-2"><strong>Cancellation Policy</strong></h4>
                            <p class="text-secondary lh-base"><strong>Before Shipment:</strong> Orders cancelled before
                                shipment are eligible for a full refund. Refunds are processed within 48–72 business hours.
                            </p>
                            <p class="text-secondary lh-base"><strong>After Shipment:</strong> If the order has already been
                                shipped, you may refuse delivery or request cancellation by email. Refunds will be processed
                                after the product is returned and inspected. Shipping and return handling charges may be
                                deducted.</p>

                            <h4 class="mt-4 mb-2"><strong>Loyalty Points & Discount Coupons</strong></h4>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Discount coupons are treated as
                                    single-use and may not be restored after cancellation.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Loyalty points used for cancelled orders
                                    may be credited back to the customer account.</li>
                            </ul>

                            <h4 class="mt-4 mb-2"><strong>Refund Support</strong></h4>
                            <p class="text-secondary lh-base">If you have not received your refund within the expected
                                timeline, please contact us at:</p>
                            <address>
                                <p class="color--light-3">Email: <a href="mailto:info@ranayas.com">info@ranayas.com</a></p>
                            </address>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
