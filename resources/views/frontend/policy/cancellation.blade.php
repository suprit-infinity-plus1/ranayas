@extends('layouts.master')
@section('title', 'Cancellation Policy')
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
                                <span>Cancellation Policy</span>
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
                            <h2 class="heading-secondary mb-4"><strong>Cancellation Policy</strong></h2>

                            <h4 class="mt-4 mb-2"><strong>Before Shipment</strong></h4>
                            <p class="text-secondary lh-base">Orders cancelled before shipment are eligible for a full
                                refund. Refunds are processed within <strong>48–72 business hours</strong>.</p>

                            <h4 class="mt-4 mb-2"><strong>After Shipment</strong></h4>
                            <p class="text-secondary lh-base">If the order has already been shipped:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> You may refuse delivery or request
                                    cancellation by email.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Refunds will be processed after the
                                    product is returned and inspected.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Shipping and return handling charges may
                                    be deducted.</li>
                            </ul>

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
