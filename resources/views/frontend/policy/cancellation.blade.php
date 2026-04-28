@extends('layouts.master')
@section('title', 'Cancellation')
@section('content')

    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Cancellation</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current"><span>Cancellation</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->


    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row ptb--40 ptb-md--30 ptb-sm--20">
                    <div class="col-lg-12  col-md-12 order-md-2 mb-sm--25">
                        <div class="about-text">

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">After Shipment :</h2>
                            <p class="text-secondary lh-base">Incase you change your mind and wish to cancel an order that
                                has been
                                shipped or out for Delivery, email us at <a href="mailto:info@easy.in">info@ranayas.com</a>.
                            </p>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Request :</h2>
                            <p class="text-secondary lh-base"> If the order is out for delivery and courier boy attempts to
                                deliver
                                kindly do not accept the delivery of the order.</p>
                            <p class="text-secondary lh-base">Once we receive the product back we will verify the packaging
                                /
                                Conditions [ <span>Easy Fit Hearing</span> reserves the right to dishonor cancelation
                                request
                                that are fraudulent or Intentional and decision taken by company management will be Final ].
                                After inspection we will return your balance money after deducting Shipping Charges and
                                Return Expenses within 10 to 15 days after cancellation request is duly processed by our
                                Team.
                            </p>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Before Shipment : </h2>
                            <p class="text-secondary lh-base">Incase you change your mind and wish to cancel an order that
                                has not
                                been shipped, immediately email us at <a
                                    href="mailto:info@ranayas.com">info@ranayas.com</a>.
                            </p>
                            <p class="text-secondary lh-base">In such circumstances the order will be cancelled and the
                                total money
                                paid by you will be returned to your account within 48 to 72 Business Hours after
                                cancellation request is duly processed by our Team.</p>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Incase of Loyalty Points or Discount Voucher
                                used. </h2>
                            <ul class="theme-list-item">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Discount Coupon are meant for Single use
                                    and shall be treated as used.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Loyalty Points redeemed will be credited
                                    back to your account incase of Cancellation.
                                <li>
                            </ul>
                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">FAQ for Cancellation </h2>
                            <h4 class="fs-6 fw-normal lh-base mt-3">1] What is your cancellation Policy ?</h4>
                            <p class="text-secondary lh-base">
                                A] Same as above
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">2] Can I cancel the order ?</h4>
                            <p class="text-secondary lh-base">
                                A] Yes. Cancellation is possible in both “After Shipment “ and “ Before Shipment “. For more
                                details kindly check Cancellation Policy.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">3] Procedure to cancel Order ?</h4>
                            <p class="text-secondary lh-base">
                                A] Kindly mail us on <a href="mailto:info@ranayas.com">info@ranayas.com</a>
                                along with your order ID that you wish to cancel your order.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">4] When will I get my money refunded post Cancellation
                                of Order ?</h4>

                            <p class="text-secondary lh-base">
                                A] Incase of “Before Shipment “We initiate the refund immediately upon cancellations. The
                                time for the refund to reflect in your source account might vary depending on method of
                                Payment and it will be refunded in 48 to 72 Business Hours.
                            </p>
                            <p class="text-secondary lh-base mt-1">However incase of “After Shipment “ only after inspection
                                we
                                will return your balance money
                                after deducting Shipping Charges and Return Expenses within 10 to 15 Working Days after
                                cancellation request is duly processed by our Team.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

@endsection
