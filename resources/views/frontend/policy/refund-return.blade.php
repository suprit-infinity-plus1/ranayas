@extends('layouts.master')
@section('title', 'Refund & Return')
@section('content')


    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Refund & Return</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current"><span>Refund & Return</span></li>
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

                            <p class="text-secondary lh-base">
                                With our policy of ensuring customer satisfaction, this return and refund Policy of
                                www.ranayas.com list procedures and policies in accepting Product returns, once a
                                Product has been delivered to a customer after purchase from our website. Any return of
                                Products by customer shall be governed by and subject to the terms and conditions set in
                                this Return and Refund Policy.
                            </p>

                            <p class="text-secondary lh-base">
                                We request customers to read and understand the terms of this Return and Refund Policy. If
                                you do not agree to the terms contained in this Return and Refund Policy and if you do not
                                to accept the Terms of Use and may forthwith leave and stop using the website. The terms
                                contained in this Return and Refund Policy shall be accepted without modification and you
                                agree to be bound by the terms contained herein by initiating a request for purchase of
                                Product on the website.
                            </p>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Terms of Return and Refund</h2>
                            {{-- <div class="table-responsive mb-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2"> Product Category</th>
                                        <th>Return Period</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2"> Clothing </td>
                                        <td> Shirts, T – Shirts and Vests. </td>
                                        <td> 07 days from the date of delivery**.</td>
                                    </tr>
                                    <tr>
                                        <td> Boxers, Joggers, Half Pants etc.
                                            Innerwear: Briefs and Panties, lingerie sets and Socks
                                        </td>
                                        <td> Non-Returnable. </td>
                                    </tr>
                                    <tr>
                                        <td>Personal Care</td>
                                        <td>Perfumes, Skin care, Hair Care and any Cosmetic Products etc.</td>
                                        <td>Non-Returnable.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}

                            <h3 class="text-left mb-1 fs-5 fw-medium">Note : *07 days counted from the day of delivery.</h3>
                            <h3 class="text-left mb-1 fs-5 fw-medium">Note : *Returns not accepted under following CONDITONS
                                :</h3>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Product returned without original Packing
                                    including Price Tags, Labels, Freebies /
                                    Gifts and other accessories.
                                </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Product used, soiled or seal is Tampered.
                                </li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Barcode or security Code is tampered
                                    with.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> If request for return is initiated after
                                    07 days from the day of Delivery.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Freebies / Gift is damaged, used or not
                                    returned with Products Ordered.
                                </li>
                            </ul>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Refund Charges :
                            </h2>

                            <p class="text-secondary lh-base">
                                We deduct Shipping Charges in case of product Returned and balance amount will be refunded
                                in your account.
                            </p>

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">Incase of Damaged / Defective / Wrong Product in
                                my Order </h2>
                            <p class="text-secondary lh-base">We follow 2 level check before a product is packed and use
                                right
                                packaging to ensure customer receive product in Perfect Condition. Even after taking all
                                precautions if the product is damaged during shipment or transit, you can request for a
                                replacement or refund.</p>
                            <p class="text-secondary lh-base">If you have received an item in a damaged/defective condition
                                or have
                                been sent a wrong product, you can follow a few simple steps to initiate your return/refund
                                within 72 Hrs of receiving the order:</p>
                            <ul>
                                <li><strong>Step 1:</strong> Contact our Customer Support team via email (<a
                                        href="mailto:info@ranayas.com">info@ranayas.com</a>)
                                    within 72 hrs from the time of receiving the order.</a>) within 72 hrs from the time of
                                    receiving the order.</li>
                                <li><strong>Step 2:</strong> Kindly share your Invoice number and an image of the product.
                                </li>
                                <li><strong>Step 3:</strong> We don’t have return Pick arrangement hence you need to pack
                                    the product and send us to below mentioned address :
                                </li>
                            </ul>
                            <p class="text-secondary lh-base">
                                Easy Fit Hearing,<br />
                                G1 sagar chamber saini enclave Vikas mark,<br />
                                New Delhi 110092,<br />
                            </p>

                            <p class="text-secondary lh-base">We will initiate the refund or replacement process only if the
                                products are received by us in their original packaging with their seals, labels, barcodes
                                intact and freebies or gifts are returned along with Product. Easy Fit Hearing reserves the
                                right to dishonor return request that are fraudulent or intentional and decision taken by
                                Management will be final.</p>

                            <p class="text-secondary lh-base">

                            <div class="divider mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256">
                                    <path fill="var(--theme-color)"
                                        d="M237.43 130.55C215.84 176.57 197 198 178 198c-23.83 0-39.2-32.76-55.47-67.45C109.26 102.17 94.17 70 78 70c-9.18 0-25 10.5-48.53 60.55a6 6 0 0 1-10.86-5.1C40.16 79.43 59 58 78 58c23.83 0 39.2 32.76 55.47 67.45C146.74 153.83 161.83 186 178 186c9.18 0 25.05-10.5 48.53-60.55a6 6 0 0 1 10.86 5.1Z" />
                                </svg>
                            </div>

                            <h2 class="text-left mb-1 mt-3 fs-3 fw-normal">
                                Note: Incase stock not available of ordered product we will refund you the full amount
                                on receiving the product.
                            </h2>
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">1] How do I return my Product ?</h4>
                            <p class="text-secondary lh-base">
                                A] Incase you wish to return your product kindly send us email on <a
                                    href="mailto:info@ranayas.com">info@ranayas.com</a>
                                Along with your Order ID and reason for return.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">2] What if I don't like the product as soon as it is
                                delivered? Can I return it to
                                courier person?</h4>
                            <p class="text-secondary lh-base">
                                A] No. we don’t have such arrangement of returns with our courier
                                partner.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">3] Will I be refunded the shipping charges incase of
                                return ?
                            </h4>
                            <p class="text-secondary lh-base">
                                A] No we deduct Shipping Charges from your paid amount.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">4] When is my refund on return processed?</h4>
                            <p class="text-secondary lh-base">
                                A] Once we
                                receive the product at our warehouse and necessary check done by our Team we
                                refund your amount in 10 to 15 days.
                            </p>

                            <h4 class="fs-6 fw-normal lh-base mt-3">5] I have still not received my refund Amount kindly
                                help ?
                            </h4>
                            <p class="text-secondary lh-base">
                                A] We apologize for delay and request you to send a mail with subject : “Urgent Refund
                                Pending” to <a href="mailto:info@ranayas.com">info@ranayas.com</a> with your
                                Order
                                Number and we shall do the needful.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

@endsection
@section('extracss')
    <style>
        .table-bordered {
            border: 1px solid #dee2e6 !important;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6 !important;
        }

        .table td,
        .table th {
            padding: .75rem !important;
            vertical-align: top !important;
            border-top: 1px solid #dee2e6 !important;
        }
    </style>
@endsection
