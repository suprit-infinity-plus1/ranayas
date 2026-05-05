@extends('layouts.master')
@section('title', 'Terms & Conditions')
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
                                <span>Terms & Conditions</span>
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
                            <h2 class="heading-secondary mb-4">Terms & Conditions</h2>
                            <p class="text-secondary lh-base">By using the Ranayas website, you agree to the following:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> All orders must be prepaid (No COD available).</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Prices and product availability are subject to change without notice.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Ranayas reserves the right to cancel any order due to stock issues, incorrect pricing, or suspicious activity.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Customers must provide accurate shipping details.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Delivery timelines are estimates and may vary due to courier delays or external factors.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Ranayas is not responsible for delays caused by courier partners.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
