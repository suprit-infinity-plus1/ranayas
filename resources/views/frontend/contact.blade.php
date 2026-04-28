@extends('layouts.master')
@section('title', 'Contact')
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
                                <span>Contact Us</span>
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
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="heading-secondary mb-4">Get in touch</h2>

                        <!-- Contact form Start Here -->
                        <form action="{{ route('contact') }}" class="form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-floating form__group mb-20">
                                    <input type="text" placeholder="Name *"
                                        class="form__input form__input--2 form-control" id="floatingInput" name="name"
                                        required="required" value="{{ old('name') }}"
                                        oninvalid="this.setCustomValidity('Please enter name')"
                                        oninput="setCustomValidity('')">
                                    <label for="floatingInput">Name *</label>
                                </div>

                                <div class="col-md-6 form__group mb-20 form-floating">
                                    <input type="email" placeholder="E-mail *"
                                        class="form__input form__input--2 form-control" name="email" id="floatingEmail"
                                        required="required" value="{{ old('email') }}"
                                        oninvalid="this.setCustomValidity('Please enter email')"
                                        oninput="setCustomValidity('')">
                                    <label for="floatingEmail">Email *</label>
                                </div>


                                <div class="col-md-6 form__group mb-20 form-floating">
                                    <input type="text" placeholder="Phone"
                                        class="form__input form__input--2 form-control" id="floatingPhone" name="mobile"
                                        required="required" value="{{ old('mobile') }}"
                                        oninvalid="this.setCustomValidity('Please enter mobile')"
                                        oninput="setCustomValidity('')">
                                    <label for="floatingPhone">Phone *</label>
                                </div>

                                <div class="col-md-6 form__group mb-20 form-floating">
                                    <input type="text" placeholder="Subject"
                                        class="form__input form__input--2 form-control" id="floatingSubject" name="subject"
                                        value="{{ old('subject') }}">
                                    <label for="floatingSubject">Subject</label>
                                </div>

                                <div class="col-md-12 form__group mb-20 form-floating">
                                    <textarea placeholder="Type Your Message" name="message" id="messageArea"
                                        class="form__input form__input--textarea form-control">{{ old('message') }}</textarea>
                                    <label for="messageArea">Message *</label>
                                </div>


                                <div class="col-md-12 form__group mb-20 ml-1">
                                    <Button type="submit" class="btn btn-style2 pull-right">Send</Button>
                                </div>
                            </div>
                        </form>
                        <!-- Contact form end Here -->

                    </div>


                    <!-- Contact info widget start here -->
                    <div class="col-md-6 col-xl-4 offset-xl-1">
                        <div class="contact-info-widget mb-20">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <h2 class="heading-secondary mb-4">Contact info</h2>
                                    <div class="contact-info">
                                        <h5 class=" mt-1 mb-1"> Our Location</h5>
                                        <p><span class="font-weight-bold">Ranayas Devices Pvt. Ltd.</span>
                                            Shop No No 4-A, Ground Floor,
                                            Prakash Building, R. B. Mehta Marg,
                                            Ghatkopar East, Mumbai - 400 077
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="contact-info mb-sm--35">
                                        <h5>Email</h5>
                                        <a href="mailto:info@ranayas.com">info@ranayas.com</a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="contact-info mb-sm--35">
                                        <h5>Contact Us</h5>
                                        <a href="tel:+919911998998">(+91) 991 199 8998</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Contact info widget  End here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Wrapper End -->

@endsection
