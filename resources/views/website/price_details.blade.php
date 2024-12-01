@extends(layouts.website)
@section('content')
	<style>
		.img-style {
			width: 235px;
			height: 265px;
			object-fit: cover;
		}
	</style>
    <style>
      
        .price-table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
         
        }
        .price-table th, .price-table td {
            padding: 12px;
            text-align: left;
        }
        .price-table th {
            background-color: #4CAF50;
            color: white;
        }
        .price-table tr:nth-child(even) {
            background-color: #eaf7e9;
        }
        .price-table tr:hover {
            background-color: #d4eed1;
        }
        .header {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #4CAF50;
        }
    </style>


    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Products price-Details</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Products price-Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <h2 class="header pb-3" >AgriSimpleImpex Product Price List</h2>

    <table class="price-table">
        <tr>
            <th>Product Name</th>
            <th>Quality</th>
            <th>Quantity</th>
            <th>Price (per unit)</th>
        </tr>
        <tr>
            <td>Bananas</td>
            <td>Premium</td>
            <td>1 Ton</td>
            <td>$450</td>
        </tr>
        <tr>
            <td>Bananas</td>
            <td>Standard</td>
            <td>1 Ton</td>
            <td>$400</td>
        </tr>
        <tr>
            <td>Tender Coconut</td>
            <td>Fresh</td>
            <td>500 Pieces</td>
            <td>$300</td>
        </tr>
        <tr>
            <td>Hybrid Tender Coconut</td>
            <td>Best Quality</td>
            <td>500 Pieces</td>
            <td>$350</td>
        </tr>
    </table>


    <style>
        .gallery-image {
            width: 100%;
            height: 200px; /* Set desired height for rectangle */
            object-fit: cover;
        }
    </style>
    <div class="container mt-5">
        <h2 class="text-center mb-4">AgriSimpleImpex Image Gallery</h2>
        <div class="row">
            <!-- Image 1 -->
            <div class="col-md-4 mb-4">
                <img src="{{ asset('website') }}/img/agri-impex/5.webp" alt="Gallery Image 1" class="gallery-image">
            </div>
            <!-- Image 2 -->
            <div class="col-md-4 mb-4">
                <img src="{{ asset('website') }}/img/agri-impex/6.webp" alt="Gallery Image 2" class="gallery-image">
            </div>
            <!-- Add more images as needed -->
        </div>
    </div>

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