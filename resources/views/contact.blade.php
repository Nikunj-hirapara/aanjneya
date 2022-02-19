@extends('layout')
@section('content')

<!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="page-title-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<h2>Contact</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="index.html">
										Home 
									</a>
								</li>
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Address Area -->
		<section class="address-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-address">
							<i class='bx bx-phone-call'></i>
							<h3>Contact</h3>
							<span>Talk to support</span>
							<a href="tel:+918160247472">+91 8160247472</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-address">
							<i class='bx bx-location-plus'></i>
							<h3>Location</h3>
							<p style="font-size: 12px; padding: 4px">"Vasudev", Vidyanagar Society,GIDC Road, Near Railway Crossing, Lathi Road Amreli 365601 Gujarat, India</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-address">
							<i class='bx bx-time'></i>
							<h3>Mail Us</h3>
							<span>Contact E-mail</span>
							<p>aanjneyainternational@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Address Area -->

		<!-- Start Map Area -->
		<div class="contact-map-area">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.490345742986!2d-73.96750143523047!3d40.61906700123384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c244c3ffffffff%3A0x6c479ba7bf09f320!2sFresh%20%26%20Green%20Cleaning%20Services!5e0!3m2!1sen!2sbd!4v1613660201732!5m2!1sen!2sbd"></iframe>
			</div>
		</div>
		<!-- End Map Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-wrap contact-pages mb-0">
							<div class="contact-form">
								<div class="section-title">
									<span class="pumpkin-color">information</span>
									<h2>Drop us a message for any query</h2>
								</div>
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn btn-two">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

@stop