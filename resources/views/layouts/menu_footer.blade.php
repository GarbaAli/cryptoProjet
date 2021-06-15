<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Crypto-asset</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/img/favicon.png') }}">
        <!-- Place favicon.png in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-alpha-1.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css.map') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/testimonial.css') }}">
    </head>
    <body>
       

        <!-- ========================= preloader start ========================= -->
            <div class="preloader d-none">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('img/logo.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#How-it-work">How it Work?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#business">Business</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#payment">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#customers">Customers reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" wow fadeInUp"  data-wow-delay=".6s" href="{{ route('register') }}"><strong>Register Now</strong></a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->

        @yield('content')

        
        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100 img-bg" style="background-image: url({{ asset('img/common-bg.jpg') }})">
            <div class="container">
                <div class="row">
                  <div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
                    <a href="#" class="logo mb-40"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="footer-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">How it Work ? </a></li>
                            <li><a href="#">About </a></li>
                            <li><a href="#">Business </a></li>
                            <li><a href="#">Payment </a></li>
                            <li><a href="#">Customers reveviews </a></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="copyright-area">
                    <p class="mb-0 text-white text-center"> <a href="mailto:crypto.trade-bonus.net" rel="nofollow" target="_blank">contact@crypto-asset.net</a></p>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->


        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-chevron-up"></i>
        </a>
        
		<!-- ========================= JS here ========================= -->
        {{-- <script src="{{ asset('js/jquery-min.js') }}"></script> --}}
		<script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-1-min.js') }}"></script>
        {{-- <script src="{{ asset('js/contact-form.js') }}"></script> --}}
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        {{-- <script src="{{ asset('js/owl.carousel.js') }}"></script>  --}}
       
        <script type="text/javascript">
            $('#beginers').click(function() {
                $('#modalPush').modal('toggle')
            });

            $('#standard').click(function() {
                $('#modalPushStandard').modal('toggle')
            });

            $('#entreprise').click(function() {
                $('#modalPushEntreprise').modal('toggle')
            });
            </script>
    </body>
</html>
