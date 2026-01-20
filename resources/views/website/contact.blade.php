@extends('layouts.website')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section" style="margin-top: 30px;">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6">
						<div class="contact-us-left">
							<!--Start Image -->
							<img src="{{ asset('website/img/agri-impex/img1.jpg') }}" alt="Contact Us"
								style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
							<!--/End Image -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="contact-us-form">
							<h2>Contact With Us</h2>
							<p>If you have any questions please feel free to contact us.</p>
							<!-- Form -->
							<form class="form" method="post" action="{{route('contact-submit')}}">
								@csrf
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" placeholder="Enter Your Name"
												required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" placeholder="Enter Your Email"
												required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="mobile">Phone</label>
											<input type="text" name="mobile" id="mobile" placeholder="Enter Your Phone"
												required="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" name="subject" id="subject" placeholder="Type Subject"
												required="">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" placeholder="Type Your Message Here"
												required=""></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">Send Message</button>
										</div>
										<div class="checkbox">
											<label class="checkbox-inline" for="2"><input name="news" id="2"
													type="checkbox">Do you want to subscribe our Newsletter ?</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
			<div class="contact-info">
				<div class="row">
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont icofont-ui-call"></i>
							<div class="content">
								<h3>{{ $site->phone ?? '+91 9440754054' }}</h3>
								<p><a href="mailto:{{ $site->email ?? 'info@agrisimpleimpex.com' }}">{{ $site->email ??
										'info@agrisimpleimpex.com' }}</a></p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont-google-map"></i>
							<div class="content">
								<h3>{{ $site->address ?? 'Anantapur, Andhra Pradesh' }}</h3>
								<!-- <p>Anantapur, Andhra Pradesh</p> -->
							</div>
						</div>
					</div>
					<!--/End single-info -->
					<!-- single-info -->
					<div class="col-lg-4 col-12 ">
						<div class="single-info">
							<i class="icofont icofont-wall-clock"></i>
							<div class="content">
								<h3>Mon - Sat: 8am - 5pm</h3>
								<p>Every Day </p>
							</div>
						</div>
					</div>
					<!--/End single-info -->
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->

@endsection