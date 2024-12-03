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
    <section class="news-single section">
        <div class="container">

            <div class="col-12">
                <div class="blog-comments">
                    <h2>All KYC Images</h2>
                    <div class="image-gallery">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="single-image">
                                    <a href="{{ asset('website') }}/img/kyc/1.jpg" target="_blank">
                                        <img src="{{ asset('website') }}/img/kyc/1.jpg"
                                            style="width: 300px;height:250px;object-fit:cover;" alt="#">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="single-image">
                                    <a href="{{ asset('website') }}/img/kyc/2.jpg" target="_blank">
                                        <img src="{{ asset('website') }}/img/kyc/2.jpg"
                                            style="width: 300px;height:250px;object-fit:cover;" alt="#">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="single-image">
                                    <a href="{{ asset('website') }}/img/kyc/3.jpg" target="_blank">
                                        <img src="{{ asset('website') }}/img/kyc/3.jpg"
                                            style="width: 300px;height:250px;object-fit:cover;" alt="#">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="single-image">
                                    <a href="{{ asset('website') }}/img/kyc/4.jpg" target="_blank">
                                        <img src="{{ asset('website') }}/img/kyc/4.jpg"
                                            style="width: 300px;height:250px;object-fit:cover;" alt="#">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
