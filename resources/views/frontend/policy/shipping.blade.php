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
                            <h2 class="heading-secondary mb-4">Shipping Policy</h2>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Orders are processed within 1–2 business days</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Delivery time: 3–7 business days across India</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Shipping charges will be calculated at checkout (if applicable)</li>
                            </ul>

                            <p class="text-secondary lh-base">We work with trusted courier partners to ensure safe delivery.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
