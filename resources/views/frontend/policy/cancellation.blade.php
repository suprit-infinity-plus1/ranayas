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
                            <h2 class="heading-secondary mb-4">Cancellation Policy</h2>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Orders can be cancelled before dispatch only</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Once shipped, orders cannot be cancelled</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Refunds for cancelled orders will be processed within 5–7 business days</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
