@extends('layouts.website')
@section('content')


	<!-- Start Appointment -->
	<section class="appointment">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>We Are Always Ready to Assist You. Book an Appointment!</h2>
						<img src="{{ asset('website') }}/img/section-img.png" alt="#">
						<p>Whether you're a buyer looking for premium coconuts and bananas, a seller wanting to connect
							with potential customers, or a farmer ready to bring your products to market, we're here to
							help! At <b>AgriSimpleImpex</b>, we facilitate smooth transactions and ensure everyone gets
							the best value. </p>

						<p>
							Don’t hesitate—schedule your appointment today and let's work together to grow your
							business!
						</p>


					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<form class="form" action="#">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input name="name" type="text" placeholder="Name">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input name="email" type="email" placeholder="Email">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input name="phone" type="text" placeholder="Phone">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<div class="nice-select form-control wide" tabindex="0"><span
											class="current">Select Product</span>
										<ul class="list">
											<li data-value="1" class="option selected ">Banana</li>
											<li data-value="2" class="option">Green Tender Coconut</li>
											<li data-value="3" class="option">Orange Tender Coconut</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<div class="nice-select form-control wide" tabindex="0"><span
											class="current">Who Are You</span>
										<ul class="list">
											<li data-value="1" class="option selected ">Buyer </li>
											<li data-value="2" class="option">Farmer </li>
											<li data-value="3" class="option">Seller</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input type="text" placeholder="Date" id="datepicker">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group">
									<textarea name="message" placeholder="Write Your Message Here....."></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 col-md-4 col-12">
								<div class="form-group">
									<div class="button">
										<button type="submit" class="btn">Book An Appointment</button>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-8 col-12">
								<p>( We will be confirm by an Text Message )</p>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 col-md-12 ">
					<div class="appointment-image">
						<img src="{{ asset('website') }}/img/agri-impex/booking.jpg" alt="#">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Appointment -->

	<!-- Start Newsletter Area -->
	<section class="newsletter section">
		<div class="container">
			<div class="row ">
				<div class="col-lg-6  col-12">
					<!-- Start Newsletter Form -->
					<div class="subscribe-text ">
						<h6>Sign up for newsletter</h6>
						<p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
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