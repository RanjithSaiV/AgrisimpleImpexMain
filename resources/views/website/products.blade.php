@extends('layouts.website')
@section('content')

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Bananas</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Banana</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/1.jpg" alt="#">
                            </div>
                            <!-- News Title -->
                            <h1 class="news-title"><a href="news-single.html">Leading Exporter and Supplier of
                                    High-Quality Bananas from India.</a></h1>
                            <!-- Meta -->

                            <!-- News Text -->
                            <div class="news-text">
                                <p>AgriSimpleImpex is a leading exporter and supplier of premium tender coconuts
                                    from India, catering to the global market with a commitment to quality that
                                    meets international standards. With extensive farms across Karnataka, Tamil
                                    Nadu, and Kerala, AgriSimpleImpex has the capacity to provide substantial
                                    quantities of fresh, natural tender coconuts, maintaining their authentic taste
                                    by avoiding any chemical processing</p>
                                <p>Known for their refreshing properties, tender coconuts are widely enjoyed as a
                                    natural, hydrating beverage, particularly in hot weather. They are packed with
                                    essential nutrients, including vitamins B and C, and vital minerals, offering a
                                    wholesome energy boost throughout the day and serving as an ideal alternative to
                                    artificial glucose drinks.

                                </p>
                                <div class="image-gallery">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="{{ asset('website') }}/img/agri-impex/banana/2.jpg" style="width: auto;height:350px;object-fit:cover;" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: auto;height:350px;object-fit:cover;" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>AgriSimpleImpex’s tender coconuts are nutrient-rich, containing natural sugars,
                                    fiber, proteins, and antioxidants, making them a beneficial choice for
                                    health-conscious consumers. Their wholesale supply chain supports local
                                    suppliers across India, ensuring access to premium quality coconuts at
                                    competitive prices</p>
                                <blockquote class="overlay">
                                    <p>Rooted in quality, growing with trust – AgriSimpleImpex is committed to
                                        delivering nature’s best to the world</p>
                                </blockquote>
                                
                            </div>
                           
                        </div>
                    </div>
                

                </div>
           
            </div>
          
            <div class="col-lg-4 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search Here...">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Our Products</h3>
                        <ul class="categor-list">
                            <li><a href="bananas.html">Bananas</a></li>
                            <li><a href="green-coconut.html">Green Tender Coconut</a></li>
                            <li><a href="orange-coconut.html">Orange Tender Coconut</a></li>
                         
                        </ul>
                    </div>
                 
                    <!-- Single Widget -->

                    <!-- <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                    
                        <div class="single-post">
                            <div class="image">
                                <img src="{{ asset('website') }}/img/blog-sidebar1.jpg" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">We have annnocuced our new product.</a></h5>
                                <ul class="comment">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
                                </ul>
                            </div>
                        </div>
                      
                    </div> -->
                    
                    <!--/ End Single Widget -->
                   
                   
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="blog-comments">
                <h2>All Gallery Images</h2>
                <div class="image-gallery">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/2.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/2.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="single-image">
                                <img src="{{ asset('website') }}/img/agri-impex/banana/3.jpg" style="width: 300px;height:250px;object-fit:cover;" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Single News -->


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

@endsection