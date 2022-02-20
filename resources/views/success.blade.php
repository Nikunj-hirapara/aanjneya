@extends('layout')
@section('content')

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="page-title-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<h2>Testimonial</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home 
									</a>
								</li>
								<li>Testimonial</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Team Area -->
		<section class="team-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<h2>Face Behind The Success</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/1.jpg" alt="Image">
							<div class="team-content">
								<h3>Capt. Mahadev Dhandhiya</h3>
								<span>CEO & Co-Founder</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/vaibhav.jpeg" style="width: 400px; height: 500px" alt="Image">
							<div class="team-content">
								<h3>Vaibhav Navapariya</h3>
								<span>President & Co-Founder</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/3.jpg" alt="Image">
							<div class="team-content">
								<h3>Krishn Joshi</h3>
								<span>Managing Director & Co-Founder</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/4.jpg" alt="Image">
							<div class="team-content">
								<h3>Pratik Tank</h3>
								<span>Chairman & Co-Founder</span>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/4.jpg" alt="Image">
							<div class="team-content">
								<h3>Rajeev Vyas</h3>
								<span>Head ( Administration & Finance )</span>
							</div>
						</div>
					</div>
                    <div class="col-lg-4 col-sm-6">
						<div class="single-team">
							<img src="{{asset('assets')}}/img/team/ashish.jpeg" style="height: 500px" alt="Image">
							<div class="team-content">
								<h3>Ashish Vekariya</h3>
								<span>Head ( Production & Logistic )</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Area -->

@stop