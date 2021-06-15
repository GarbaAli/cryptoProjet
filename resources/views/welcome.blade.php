@extends('layouts.menu_footer')

@section('content')
  

        <!-- ========================= hero-section start ========================= -->
        <section id="home" class="hero-section">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7">
                      <div class="hero-content-wrapper">
                          <h1 class="text-white wow fadeInDown" data-wow-delay=".2s">Trade and Invest on Crypto Using Our Platform</h1>
                          <p class="text-white wow fadeInLeft"  data-wow-delay=".4s">We measure our success by the satisfaction of our customers. <br>

                            Ethereum asset is a return optimizer that provides a key solution for investment managers that combines institutional-grade technology with strong industry experience and a deep understanding of our clients' needs and goals. .</p>
                          <a href="{{ route('register') }}" class="theme-btn wow fadeInUp"  data-wow-delay=".6s">Register Now</a>
                      </div>
                  </div>
                  <div class="col-xl-5 col-lg-5">
                      <div class="hero-img">
                          <img src="{{ asset('img/hero-img.svg') }}" alt="" class="wow fadeInRight"  data-wow-delay=".5s">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- ========================= hero-section end ========================= -->

      <!--========================= feature-section start========================= -->
      <section id="How-it-work" class="feature-section pt-150">
          <div class="container">
              <div class="row">
                  <div class="col-xl-7 col-lg-8 mx-auto">
                      <div class="section-title text-center mb-55">
                          <h2 class="mb-20 wow fadeInUp" data-wow-delay=".2s">How it work?</h2>
                      </div>
                  </div>
              </div>
              <div class="features-wrapper">
                  <div class="row justify-content-center">
                      <div class="col-xl-4 col-lg-4 col-md-6">
                          <div class="single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".2s">
                              <div class="feature-img mb-20">
                                  <img src="{{ asset('img/feature-1.svg') }}" alt="">
                              </div>
                              <div class="feature-content">
                                  <h5>Register</h5>
                                  <p>The first step is to contact us after determining your investment plan. .</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6">
                          <div class="single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".4s">
                              <div class="feature-img mb-25">
                                  <img src="{{ asset('img/feature-2.svg') }}" alt="">
                              </div>
                              <div class="feature-content">
                                  <h5>Make a deposit</h5>
                                  <p>Make your investment on our reception address and contact us to confirm the investment .</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6">
                          <div class="single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".6s">
                              <div class="feature-img mb-20">
                                  <img src="{{ asset('img/feature-3.svg') }}" alt="">
                              </div>
                              <div class="feature-content">
                                  <h5>Get paid</h5>
                                  <p>All you have to do is wait for the agreed deadline. We take care of making your capital profitable. .</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--========================= feature-section end========================= -->

      <!-- ========================= Business-section start ========================= -->
      <section id="business" class="service-section pt-150 pb-120">
          <div class="container">
              <div class="col-xl-7 col-lg-8 mx-auto">
                  <div class="section-title text-center mb-55">
                      <h2 class="mb-20 wow fadeInUp" data-wow-delay=".2s">We know how to make your asset profitable</h2>
                      <p> <strong>BUSINESS PLANS</strong> <br> Your job comes down to providing the capital that we are going to insert into the financial markets in order to maximize returns </p>
                  </div>
              </div>
              <div class="row">
                 
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni lni-bitcoin"></i>
                    </div>
                    <h4>Basic plan</h4>
                    <p><strong>Min deposit: 250 USD</strong><br>

                      Get paid 200% after 50 hours Cancel your deposit anytime</p>
                  </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni lni-bitcoin"></i>
                    </div>
                    <h4>Advanced plan</h4>
                    <p> <strong>Min deposit: 550 USD</strong> <br>

                      Get paid 500% after 100 hours Cancel your deposit anytime</p>
                  </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni lni-bitcoin"></i>
                    </div>
                    <h4>Vip plan</h4>
                    <p><strong>Min deposit: 950 USD</strong> <br>

                      Get paid 1000% after 150 hours Cancel your deposit anytime.</p>
                  </div>
                </div>
                <!-- End Col -->
      
              </div>
            </div>
      </section>
      <!-- ========================= Business-section end ========================= -->

      
      <!-- ========================= about-section start ========================= -->
      <section id="about" class="about-section pt-150 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img mb-30">
                        <img src="{{ asset('img/about-img.svg') }}" alt="image" class=" wow fadeInLeft" data-wow-delay=".4s">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content mb-30">
                        <div class="section-title mb-40">
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">About Us</h2>
                        </div>
                        <p class="mb-15 wow fadeInUp" data-wow-delay=".4s">Crypto asset was founded in 2020. With sizable assets under management, we utilize sophisticated and proven trading strategies. We are cryptocurrency experts, data scientists, and software engineers. Coincident operates with the highest levels of integrity and transparency to best serve our customers.

                            </p>
                        <p class="mb-35 wow fadeInUp" data-wow-delay=".6s">We are committed to fully partnering with our clients to ensure they receive the very best value combined with the highest quality service at the best price.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about-section end ========================= -->

      <!-- ========================= payment-section start ========================= -->
     
      <!-- ========================= countdown-section start ========================= -->
      <section id="payment" class="countdown-section pt-70 pb-70 img-bg" style="background-image: url({{ asset('img/common-bg.jpg') }})">
          <div class="container">
              <!-- Start Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="pricing-text section-header text-center">  
                    <div>   
                      <h2 class="section-title" style="color: #fff">PAYMENT MODE</h2>
                      <div class="desc-text">
                        <p  style="color: #fff">Investments are automatically detected by the sender's email adress. We therefore ask you to contact us after each transfer to confirm your investment.
                      </p>  
                      </div>
                    </div> 
                  </div>
                </div>
      
              </div>
              <!-- End Row -->
              <!-- Start Row -->
              <div class="row pricing-tables mt-50">
               <!--  Start Col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="pricing-table text-center">
                    <div class="pricing-details">
                      <h3>Beginers package</h3>
                      <h1>2.5<span>%</span></h1>
                      <p style="color: #fff">2.5% Daily for 6 Days</p> <hr style="background-color: #3ecf8e">
                      <ul>
                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Min-Invest</p>
                          <p style="color:  #3ecf8e">$100.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Max-Invest</p>
                          <p style="color:  #3ecf8e">$19,999.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Ref Commissions</p>
                          <p style="color:  #3ecf8e">10 <span>%</span></p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Instant Payment</p>
                          <p style="color:  #3ecf8e">Yes</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <p style="color: #fff">You will receive 2.5% daily profit and after 6 days you can withdraw, re-invest or top up</p>
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="#" id="beginers" class="theme-btn wow fadeInUp"  data-wow-delay=".6s">INVEST NOW</a>
                    </div>
                  </div>
                </div>
                 <!--  End Col -->
               <!--  Start Col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="pricing-table text-center">
                    <div class="pricing-details">
                      <h3>standard package</h3>
                      <h1>3.5<span>%</span></h1>
                      <p style="color: #fff">3.5% Daily for 6 Days</p> <hr style="background-color: #3ecf8e">
                      <ul>
                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Min-Invest</p>
                          <p style="color:  #3ecf8e">$20.000.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Max-Invest</p>
                          <p style="color:  #3ecf8e">$99.999.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Ref Commissions</p>
                          <p style="color:  #3ecf8e">10 <span>%</span></p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Instant Payment</p>
                          <p style="color:  #3ecf8e">Yes</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <p style="color: #fff">You will receive 3.5% daily profit and after 6 days you can withdraw, re-invest or top up</p>
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="#" id="standard" class="theme-btn wow fadeInUp"  data-wow-delay=".8s">INVEST NOW</a>
                    </div>
                  </div>
                </div>
                 <!--  End Col -->
               <!--  Start Col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="pricing-table text-center">
                    <div class="pricing-details">
                      <h3>entreprise package</h3>
                      <h1>4.5<span>%</span></h1>
                      <p style="color: #fff">4.5% Daily for 6 Days</p> <hr style="background-color: #3ecf8e">
                      <ul>
                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Min-Invest</p>
                          <p style="color:  #3ecf8e">$100.000.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Max-Invest</p>
                          <p style="color:  #3ecf8e">$1.000.000.00</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Ref Commissions</p>
                          <p style="color:  #3ecf8e">10 <span>%</span></p>
                        </li> <hr style="background-color: #3ecf8e">

                        <li class="d-flex justify-content-between">
                          <p style="color: #fff">Instant Payment</p>
                          <p style="color:  #3ecf8e">Yes</p>
                        </li> <hr style="background-color: #3ecf8e">

                        <p style="color: #fff">You will receive 4.5% daily profit and after 6 days you can withdraw, re-invest or top up</p>
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="#" id="entreprise" class="theme-btn wow fadeInUp"  data-wow-delay=".10s">INVEST NOW</a>
                    </div>
                  </div>
                </div>
                 <!--  End Col -->
      
              </div>
              <!-- End Row -->
            </div>
      </section>
      <!-- ========================= countdown-section end ========================= -->


      <!--Modal: Beginers-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify" role="document">
  <!--Content-->
  <div class="modal-content text-center modal-info">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel1">BEGINERS PACKAGE</h5>
    </div>
    <!--Body-->
    <div class="modal-body">
      
      <li class="d-flex justify-content-between">
        <p>Bitcoin : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Perfect Money : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Payeer : </p>
        <p style="color:  #3ecf8e">code...</p>
      </li>

    </div>
    <div style="background-color: #151948" class="modal-footer">
      <P style="color: #fff">Copier le code</P>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Beginers-->


   <!--Modal: Standard-->
   <div class="modal fade" id="modalPushStandard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify" role="document">
     <!--Content-->
     <div class="modal-content text-center modal-info">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalToggleLabel1">STANDARD PACKAGE</h5>
       </div>
       <!--Body-->
       <div class="modal-body">
         
         <li class="d-flex justify-content-between">
           <p>Bitcoin : </p>
           <p style="color:  #3ecf8e">code</p>
         </li> <hr>
         <li class="d-flex justify-content-between">
           <p>Perfect Money : </p>
           <p style="color:  #3ecf8e">code</p>
         </li> <hr>
         <li class="d-flex justify-content-between">
           <p>Payeer : </p>
           <p style="color:  #3ecf8e">code...</p>
         </li>
   
       </div>
       <div style="background-color: #151948" class="modal-footer">
        <P style="color: #fff">Copier le code</P>
       </div>
     </div>
     <!--/.Content-->
   </div>
   </div>
   <!--Modal: Standard-->

      <!--Modal: Entreprise-->
<div class="modal fade" id="modalPushEntreprise" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify" role="document">
  <!--Content-->
  <div class="modal-content text-center modal-info">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel1">ENTREPRISE PACKAGE</h5>
    </div>
    <!--Body-->
    <div class="modal-body">
      
      <li class="d-flex justify-content-between">
        <p>Bitcoin : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Perfect Money : </p>
        <p style="color:  #3ecf8e">code</p>
      </li> <hr>
      <li class="d-flex justify-content-between">
        <p>Payeer : </p>
        <p style="color:  #3ecf8e">code...</p>
      </li>

    </div>
    <div style="background-color: #151948" class="modal-footer">
      <P style="color: #fff">Copier le code</P>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: Entreprise-->
<section>
	<div class="customer-feedback">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<div>
						<h2 class="section-title">What Clients Say</h2>
					</div>
				</div><!-- /End col -->
			</div><!-- /End row -->

			<div class="row">
				<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
					<div class="owl-carousel feedback-slider">

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="//c2.staticflickr.com/8/7310/buddyicons/24846422@N06_r.jpg" class="center-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Lisa Redfern</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" class="center-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Cassi</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="4">
								4
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->

						<!-- slider item -->
						<div class="feedback-slider-item">
							<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" class="center-block img-circle" alt="Customer Feedback">
							<h3 class="customer-name">Md Nahidul</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader will be distracted by the readable its layout.</p>
							<span class="light-bg customer-rating" data-rating="5">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>
						<!-- /slider item -->
						
					</div><!-- /End feedback-slider -->

					<!-- side thumbnail -->
					<div class="feedback-slider-thumb hidden-xs">
						<div class="thumb-prev">
							<span>
								<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">
							</span>
							<span class="light-bg customer-rating">
								5
								<i class="fa fa-star"></i>
							</span>
						</div>

						<div class="thumb-next">
							<span>
								<img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" alt="Customer Feedback">
							</span>
							<span class="light-bg customer-rating">
								4
								<i class="fa fa-star"></i>
							</span>
						</div>
					</div>
					<!-- /side thumbnail -->

				</div><!-- /End col -->
			</div><!-- /End row -->
		</div><!-- /End container -->
	</div><!-- /End customer-feedback -->
</section>

<!-- extra -->
<div class="copyright">
	<p>
		Me On:
		<a href="https://www.upwork.com/o/profiles/users/_~0195eb53c731b0e159/" target="_blank" class="upwork">UpWork</a>
		<a href="https://www.fiverr.com/thenahidul" target="_blank" class="fiverr">Fiverr</a>
		<a href="https://triplebyte.com/iv/a35URkk/cp/header" class="triplebyte" target="_blank">Jobs</a>
	</p>
</div>



@endsection