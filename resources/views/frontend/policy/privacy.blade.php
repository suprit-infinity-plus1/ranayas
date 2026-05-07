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

                            <p class="text-secondary lh-base">At Ranayas, we are committed to protecting your privacy and
                                safeguarding your personal information.</p>
                            <p class="text-secondary lh-base">This Privacy Policy applies to all users accessing or using
                                the Ranayas website and mobile applications available on Android and iOS platforms.</p>
                            <p class="text-secondary lh-base">This policy explains how we collect, use, process, store, and
                                protect your information when you interact with our platform, place orders, browse products,
                                or contact customer support.</p>
                            <p class="text-secondary lh-base">By accessing or using the Ranayas website or mobile
                                applications, you agree to the terms of this Privacy Policy.</p>

                            <h4 class="mt-4 mb-2"><strong>Information We Collect</strong></h4>
                            <p class="text-secondary lh-base">We may collect the following information from users:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Name</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Email address</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Phone number</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Shipping and billing address</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> PIN code</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Payment information</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Order history</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> IP address and browser details</li>
                            </ul>
                            <p class="text-secondary lh-base">This information helps us process orders, improve user
                                experience, provide customer support, and communicate updates or offers.</p>

                            <h4 class="mt-4 mb-2"><strong>Cookies</strong></h4>
                            <p class="text-secondary lh-base">We may use cookies and similar technologies to:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> Improve website functionality</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Personalize user experience</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Analyze website traffic</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Remember user preferences</li>
                            </ul>
                            <p class="text-secondary lh-base">Users may disable cookies through browser settings, though
                                some features of the website may not function properly.</p>

                            <h4 class="mt-4 mb-2"><strong>Information Sharing</strong></h4>
                            <p class="text-secondary lh-base">We do not sell or rent your personal information to third
                                parties. We may share information:</p>
                            <ul class="theme-list-item mb-4">
                                <li><i class="fa fa-check" aria-hidden="true"></i> With payment gateways and logistics
                                    partners for order processing.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> When required by law or government
                                    authorities.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> To protect our legal rights or prevent
                                    fraud.</li>
                            </ul>

                            <h4 class="mt-4 mb-2"><strong>Data Security</strong></h4>
                            <p class="text-secondary lh-base">We implement reasonable security measures to protect your
                                personal information from unauthorized access, misuse, or disclosure. However, no method of
                                internet transmission or storage is completely secure, and we cannot guarantee absolute
                                security.</p>

                            <h4 class="mt-4 mb-2"><strong>Third-Party Links</strong></h4>
                            <p class="text-secondary lh-base">Currently, the Ranayas website and mobile applications
                                (Android & iOS) do not intentionally provide third-party website links for external services
                                or transactions. In case any third-party links, payment gateways, social media integrations,
                                or external platforms are introduced in the future, Ranayas shall not be responsible for the
                                privacy practices, policies, content, or security of such third-party websites or
                                applications. Users are advised to review the respective privacy policies of external
                                platforms before interacting with them.</p>

                            <h4 class="mt-4 mb-2"><strong>Changes to Privacy Policy</strong></h4>
                            <p class="text-secondary lh-base">We reserve the right to update this Privacy Policy at any
                                time. Any changes will be posted on this page.</p>

                            <hr class="mt-5 mb-4">
                            <h4 class="mb-3"><strong>Contact Information</strong></h4>
                            <address>
                                <p class="color--light-3">Ranayas</p>
                                <p class="color--light-3">Kandivali West, Mumbai, Maharashtra, India</p>
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
