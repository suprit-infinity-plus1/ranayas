@extends('layouts.master')
@section('title', 'Privacy Policy')
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
                                <span>Privacy Policy</span>
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
                            <h2 class="heading-secondary mb-4">Privacy Policy</h2>
                            <p class="text-secondary lh-base">At Ranayas, we value your privacy.</p>
                            <p class="text-secondary lh-base">We collect customer information such as:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Name</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Phone number</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Email</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Address</li>
                            </ul>

                            <p class="text-secondary lh-base">This information is used only for:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Order processing</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Delivery</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Customer support</li>
                            </ul>

                            <p class="text-secondary lh-base">We do not sell or share your personal data with third parties, except trusted logistics and payment partners.</p>
                            <p class="text-secondary lh-base">All data is stored securely.</p>

                            <hr class="mt-5 mb-5">
                            
                            <h4 class="mb-3">Contact Us</h4>
                            <address>
                                <p class="color--light-3">Ranayas</p>
                                <p class="color--light-3">kandivali west, Mumbai, India, Maharashtra</p>
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
