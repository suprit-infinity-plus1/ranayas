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
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <p class="main-p"> Ranayas was started with an aim of providing best service at a reasonable cost.
                </p>
                <p>With our hard work and dedication we are proud to say that, today in Mumbai, we are industry leader in
                    the area of fitting “<b>Digital Aid</b> Instruments”.
                    Our strength is generated from our commitment for our customers, our industry and ourselves. We give
                    maximum consideration to the quality of our service and value in providing complete assistance to our
                    customers. We provide one stop solution for all people who have hearing problems across all ages.</p>
                <p>Our hearing aids are available in two variants- Digital
                    and analogue, which are acquired from all international brands like Sonic, Siemens, ReSound, Phonak,
                    Starkey, Unitron and more. We have storng network with pre-verified dealers and distributors from all
                    over India, which ensure easy distribution of hearing aid equipments in interiors of the state.
                </p>
                <p>The hearing aid equipments provided are easy to wear, comfortable and designed to fit any ear size.
                    Numerous patients from Mumbai and beyond have received effective treatment from Ranayas Hearing. Our
                    treatment,
                    training and counseling is effective and reasonably priced.</p>
                <p>We are not an exclusive dispenser of one particular brand, our centre is authorized <b><a
                            href="{{ route('contact') }}">hearing care centre</a></b> for Siemens, ReSound, Phonak, Starkey,
                    Sonic, Unitron and octicon therefore you are rest assured that you will be prescribed a hearing aid
                    which suits your hearing requirements rather than what is available with us. We intend to provide the
                    right product range to our customers precisely as per their requirements and demands. Customer
                    satisfaction and providing benefits to the society is our ultimate goal.
                </p>
            </div>
            <div class="lg-ml-2 col-lg-3 col-md-3 text-center mb-5  col-sm-12 col-xs-12">
                <img src="assets/image/about-img.png" alt="Contact us  Ranayas" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->



@endsection
