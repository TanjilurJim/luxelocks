@extends('Template::layouts.master')
@section('content')


		<main class="main about">
			<div class="page-header page-header-bg text-left"
				style="background: 50%/cover #D4E1EA url('{{ asset('assets/b2c/assets/images/page-header-bg.jpg') }}');">
				<div class="container">
					<h1><span>ABOUT US</span>
						OUR COMPANY</h1>
					<a href="contact.html" class="btn btn-dark">Contact</a>
				</div><!-- End .container -->
			</div><!-- End .page-header -->

			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="about-section">
				<div class="container">
                    <h2 class="subtitle">OUR STORY</h2>
                    <p>Welcome to AllstoreBD, your one-stop destination for all your shopping needs. As a trusted eCommerce platform, we are committed to providing a seamless shopping experience with a wide range of high-quality products.</p>
                    <p>Founded with the vision of making online shopping easy and accessible for everyone in Bangladesh, AllstoreBD continues to grow by offering the best in customer service, secure payment options, and timely delivery.</p>
                    <p class="lead">“ At AllstoreBD, we believe in creating value for our customers by bringing convenience, affordability, and reliability to every purchase. Your satisfaction is our priority. ”</p>
                </div><!-- End .container -->

			</div><!-- End .about-section -->

			<div class="features-section bg-gray">
				<div class="container">
					<h2 class="subtitle">WHY CHOOSE US</h2>
					<div class="row">
						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-shipped"></i>

								<div class="feature-box-content p-0">
									<h3>Free Shipping</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industr.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-us-dollar"></i>

								<div class="feature-box-content p-0">
									<h3>100% Money Back Guarantee</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industr.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->

						<div class="col-lg-4">
							<div class="feature-box bg-white">
								<i class="icon-online-support"></i>

								<div class="feature-box-content p-0">
									<h3>Online Support 24/7</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industr.</p>
								</div><!-- End .feature-box-content -->
							</div><!-- End .feature-box -->
						</div><!-- End .col-lg-4 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .features-section -->

			<div class="testimonials-section">
				<div class="container">
					<h2 class="subtitle text-center">HAPPY CLIENTS</h2>

					<div class="testimonials-carousel owl-carousel owl-theme images-left" data-owl-options="{
						'margin': 20,
                        'lazyLoad': true,
                        'autoHeight': true,
                        'dots': false,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '992': {
                                'items': 2
                            }
                        }
                    }">
						<div class="testimonial">
							<div class="testimonial-owner">
								<figure>
									<img src="{{ asset('assets/b2c/assets/images/clients/client1.png') }}" alt="client">
								</figure>

								<div>
									<strong class="testimonial-title">John Smith</strong>
									<span>SMARTWAVE CEO</span>
								</div>
							</div><!-- End .testimonial-owner -->

							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
									dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
							</blockquote>
						</div><!-- End .testimonial -->

						<div class="testimonial">
							<div class="testimonial-owner">
								<figure>
									<img src="{{ asset('assets/b2c/assets/images/clients/client2.png') }}" alt="client">
								</figure>

								<div>
									<strong class="testimonial-title">Bob Smith</strong>
									<span>SMARTWAVE CEO</span>
								</div>
							</div><!-- End .testimonial-owner -->

							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
									dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
							</blockquote>
						</div><!-- End .testimonial -->

						<div class="testimonial">
							<div class="testimonial-owner">
								<figure>
									<img src="{{ asset('assets/b2c/assets/images/clients/client3.png') }}" alt="client">
								</figure>

								<div>
									<strong class="testimonial-title">John Smith</strong>
									<span>SMARTWAVE CEO</span>
								</div>
							</div><!-- End .testimonial-owner -->

							<blockquote>
								<p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum
									dolor sit amet, consectetur elitad adipiscing cas non placerat mi.</p>
							</blockquote>
						</div><!-- End .testimonial -->
					</div><!-- End .testimonials-slider -->
				</div><!-- End .container -->
			</div><!-- End .testimonials-section -->

			<div class="counters-section bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="200" data-speed="2000"
									data-refresh-interval="50">200</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">MILLION CUSTOMERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="1800" data-speed="2000"
									data-refresh-interval="50">1800</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">TEAM MEMBERS</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper line-height-1">
								<span class="count-to" data-from="0" data-to="24" data-speed="2000"
									data-refresh-interval="50">24</span><span>HR</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper">
								<span class="count-to" data-from="0" data-to="265" data-speed="2000"
									data-refresh-interval="50">265</span>+
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->

						<div class="col-6 col-md-4 count-container">
							<div class="count-wrapper line-height-1">
								<span class="count-to" data-from="0" data-to="99" data-speed="2000"
									data-refresh-interval="50">99</span><span>%</span>
							</div><!-- End .count-wrapper -->
							<h4 class="count-title">SUPPORT AVAILABLE</h4>
						</div><!-- End .col-md-4 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .counters-section -->
		</main><!-- End .main -->

		
	</div><!-- End .page-wrapper -->



@endsection