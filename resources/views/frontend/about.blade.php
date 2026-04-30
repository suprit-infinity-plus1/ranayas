@extends('layouts.master')
@section('title', 'About')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-start">
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb-url">
                            <li class="breadcrumb-url-li">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-url-li"><span>About Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div class="container section-b-padding">
        <div class="row mt-5">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <p class="main-p"><b>Ranaya’s Store</b> was started with an aim of providing quality household products at
                    reasonable prices.</p>

                <p>With our dedication and commitment, we are proud to serve customers across India with a wide range of
                    daily-use items. Our product line includes kitchen essentials, storage solutions, cleaning supplies, and
                    home utility products designed to make everyday life easier and more organized.</p>

                <p>Our strength comes from understanding <b>customer needs</b> and offering practical solutions for every
                    home. From chopping boards and storage baskets to dustbin bags, toilet paper rolls, and aluminium foil,
                    each product is carefully selected to ensure durability and affordability.</p>

                <p>We maintain a strong network of trusted suppliers and distributors, ensuring that all our products meet
                    quality standards and are readily available. Our system helps us provide <b>quick and reliable
                        delivery</b> to our customers.</p>

                <p>All our products are designed for convenience and long-lasting performance. <b>Ranaya’s Store</b> aims to
                    be your one-stop destination for essential home products.</p>

                <p>We are committed to offering a diverse product range, ensuring you always get the best option based on
                    your needs. <b>Customer satisfaction</b> remains our top priority.</p>

            </div>
            <div class="lg-ml-2 col-lg-3 col-md-3 text-center mb-5  col-sm-12 col-xs-12">
                {{-- <img src="assets/image/about-img.png" alt="Contact us  Ranayas" class="img-fluid"> --}}
                <img src="assets/image/logo/ranayas-logo.png" alt="Contact us  Ranayas" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->



@endsection
