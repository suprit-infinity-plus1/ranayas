@extends('layouts.master')
@section('title', 'Return Policy')
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
                                <span>Return Policy</span>
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
                            <h2 class="heading-secondary mb-4">Return Policy</h2>
                            <p class="text-secondary lh-base">We offer a 7-day return policy from the date of delivery.</p>
                            
                            <h4 class="mt-4 mb-3">Conditions:</h4>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Product must be unused and in original packaging</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Customer must ship the product back to us</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Return shipping cost will be borne by the customer</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Full refund will be issued after product inspection</li>
                            </ul>

                            <p class="text-secondary lh-base">If the product is damaged or defective, please contact us immediately.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
