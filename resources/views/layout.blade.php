<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/prevoz/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Feb 2022 13:49:39 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <!-- Owl Magnific Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.min.css">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets')}}/img/favicon.png">
    <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">


    <!-- Title -->
    <title>Aanjneya International</title>
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- Start Top Header Area -->
        <div class="top-header header-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header-left-content">
                            <a href="index.html">
                                <img src="{{asset('assets')}}/img/logo/logo-two.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header-right-content">
                            <ul>
                                <li>
                                    <a href="tel:+918160247472">
                                        <i class='bx bxs-phone-call'></i>
                                        <span>Contact Number</span>
                                        +91 8160247472
                                    </a>
                                </li>
                                <li>
                                    <a href="mail:aanjneyainternational@gmail.com">
                                        <i class='bx bx-envelope'></i>
                                        <span>Contact E-mail</span>
                                        <span class="__cf_email__" data-cfemail="39515c55555679494b5c4f5643175a5654">aanjneyainternational@gmail.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Prevoz Navbar Area -->
        <div class="prevoz-nav-style">
            <div class="navbar-area">
                <!-- Menu For Mobile Device -->
                <div class="mobile-nav">
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets')}}/img/logo/logo-one.png" alt="Logo">
                    </a>
                </div>
                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('assets')}}/img/logo/logo-two.png" alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" class="nav-link active">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('about') }}" class="nav-link dropdown-toggle">
                                            About
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('product') }}" class="nav-link dropdown-toggle">
                                            Product
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('success') }}" class="nav-link dropdown-toggle">
                                            Testimonials
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('gallery') }}" class="nav-link dropdown-toggle">
                                            Gallery
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('download') }}" class="nav-link dropdown-toggle">
                                            Downloads
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Prevoz Navbar Area -->
    </header>
    <!-- End Header Area -->

    @yield('content')

    <!-- Start Footer Top Area -->
    <footer class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>What We Do</h3>
                        <ul>
                            <li><a href="#">Warehousing</a></li>
                            <li><a href="#">Air Freight</a></li>
                            <li><a href="#">Ocean Freight</a></li>
                            <li><a href="#">Road Freight</a></li>
                            <li><a href="#">Supply Chain</a></li>
                            <li><a href="#">Packaging</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Industries</h3>
                        <ul>
                            <li><a href="#">Chemicals</a></li>
                            <li><a href="#">DIY</a></li>
                            <li><a href="#">Automotive</a></li>
                            <li><a href="#">Consumer Goods</a></li>
                            <li><a href="#">Life Science</a></li>
                            <li><a href="#">Foreign Trade</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>What We Do</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="team.html">Meet Our Team</a></li>
                            <li><a href="blog.html">News & Media</a></li>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="service.html">Work With Us </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Company </h3>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Approach</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Supply Chain</a></li>
                            <li><a href="#">Packaging</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Top Area -->

    <!-- Start Footer Bottom Area -->
    <footer class="footer-bottom-area fun-blue-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="single-widget-bottom">
                        <ul>
                            <li>
                                <a href="terms.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="privacy.html">Privacy &Policy</a>
                            </li>
                            <li>
                                <a href="log-in.html">Employee login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-widget-bottom">
                        <p>
                            Copyright <i class="bx bx-copyright"></i> 2021 Prevoz. Designed By
                            <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-widget-bottom">
                        <ul class="social-link">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/aanjneyainternational/">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/aanjneya_international/">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://wa.me/message/I6LJF6LSI3MUK1">
                                    <i class='bx bxl-whatsapp'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-chevrons-up bx-fade-up'></i>
        <i class='bx bx-chevrons-up bx-fade-up'></i>
    </div>
    <!-- End Go Top Area -->


    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <!-- <script src="{{asset('assets')}}/js/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu Min JS -->
    <script src="{{asset('assets')}}/js/meanmenu.min.js"></script>
    <!-- Wow Min JS -->
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <!-- Owl Magnific Min JS -->
    <script src="{{asset('assets')}}/js/magnific-popup.min.js"></script>
    <!-- Nice Select Min JS -->
    <script src="{{asset('assets')}}/js/nice-select.min.js"></script>
    <!-- Appear JS -->
    <script src="{{asset('assets')}}/js/appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="{{asset('assets')}}/js/odometer.min.js"></script>
    <!-- jarallax Min JS -->
    <script src="{{asset('assets')}}/js/jarallax.min.js"></script>
    <!-- Form Ajaxchimp Min JS -->
    <script src="{{asset('assets')}}/js/ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="{{asset('assets')}}/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="{{asset('assets')}}/js/contact-form-script.js"></script>
    <!-- Custom JS -->
    <script src="{{asset('assets')}}/js/custom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
</body>

<!-- Mirrored from templates.envytheme.com/prevoz/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Feb 2022 13:49:43 GMT -->

</html>
