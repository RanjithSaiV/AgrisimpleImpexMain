@extends('layouts.website')
@section('content')
    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2> KYC (Know Your Customer) </h2>
                        <img src="{{ asset('website') }}/img/section-img.png" alt="#">
                        <p>At our company, we prioritize transparency and security through a robust KYC (Know Your
                            Customer) process. This essential procedure helps us verify the identities of our clients
                            and suppliers, ensuring that all transactions are conducted with trusted partners.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Key Aspects of Our KYC Process</h3>
                        <p>Our KYC (Know Your Customer) process is designed to ensure transparency and security in all
                            our transactions. Here are the key aspects:


                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Identity Verification. </li>
                                    <li><i class="fa fa-caret-right"></i>Documentation Review.</li>
                                    <li><i class="fa fa-caret-right"></i>Risk Assessment.</li>
                                    <li><i class="fa fa-caret-right"></i>Continuous Monitoring.</li>

                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    < <li><i class="fa fa-caret-right"></i>Reliable Weighbridge Records.</li>
                                        <li><i class="fa fa-caret-right"></i>Company GST Invoice.</li>
                                        <li><i class="fa fa-caret-right"></i>Data Privacy.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <!-- <div class="promo-video">
								<div class="waves-block">
									<div class="waves wave-1"></div>
									<div class="waves wave-2"></div>
									<div class="waves wave-3"></div>
								</div>
							</div> -->
                            <!--/ End Video Animation -->

                            <!-- <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
								class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a> -->
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->
    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Join our community to receive exclusive insights, market trends, and valuable
                            information about sourcing and trading</p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->

@endsection