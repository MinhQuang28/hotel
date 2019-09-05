<!doctype html>
<html lang="en">
<head>
    <title>Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>


<!--====== LOADER =====-->
<div class="loader"></div>


<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
    <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
    <div class="overlay-content">
        <div class="form-center">
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." required />
                        <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                    </div><!-- end input-group -->
                </div><!-- end form-group -->
            </form>
        </div><!-- end form-center -->
    </div><!-- end overlay-content -->
</div><!-- end overlay -->


<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>29 tran hung dao, Ha Noi, VN</li>
                        <li><span><i class="fa fa-phone"></i></span>+88.66.43.465</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        @if (Session::has('ma_us'))

                            <li><a href="{{ url('profile') }}"><span>Welcome<i class="fa fa-user"></i> {{Session::get('ten_us')}} </span></a></li>
                        @else
                            <li><a href="{{ url('login') }}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                        @endif

                        <li>
                            <form>
                                <ul class="list-inline">
                                    <li>
                                        <div class="form-group currency">
                                            <span></span>
                                            <select class="form-control">
                                                <option value="">$</option>
                                                <option value="">£</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>

                                    <li>
                                        <div class="form-group language">
                                            <span></span>
                                            <select class="form-control">
                                                <option value="">EN</option>
                                                <option value="">UR</option>
                                                <option value="">FR</option>
                                                <option value="">IT</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="header-search hidden-lg">
                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div>
            <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li class=""><a href="/" >Home<span></span></a>

                </li>
                <li class="dropdown hotel"><a href="{{ url('hotels') }}">Hotels<span></span></a>

                </li>
                <li class="dropdown service"><a href="{{ url('service') }}">Service<span></span></a>

                </li>
                <li class="dropdown blog"><a href="{{ url('blogs') }}">Blog<span></span></a>

                </li>
                <li class="dropdown about"><a href="{{ url('about') }}">About<span></span></a>

                </li>
                <li class="dropdown contact"><a href="{{ url('Contact') }}">Contact<span></span></a>

                </li>

                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">

                <a href="lav.com" class="list-group-item" ><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>

                <a href="{{ url('hotels') }}" class="list-group-item active" ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>

                <a href="{{ url('Service') }}" class="list-group-item" ><span><i class="fa fa-globe link-icon"></i></span>Service<span></span></a>


                <a href="{{ url('blog') }}" class="list-group-item" ><span><i class="fa fa-ship link-icon"></i></span>Blog<span></span></a>

                <a href="{{ url('contact') }}" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Contact<span></span></a>

                <a href="{{ url('about') }}" class="list-group-item" ><span><i class="fa fa-clone link-icon"></i></span>About<span></span></a>

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-byf-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Before You Fly</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Before You Fly</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
    <div id="byf-guidelines" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side byf-info">
                    <div class="space-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#airport-info" data-toggle="tab"><span><i class="fa fa-building"></i></span>Airport Info</a></li>
                            <li><a href="#visa-passport" data-toggle="tab"><span><i class="fa fa-ticket"></i></span>Visa & Passport</a></li>
                            <li><a href="#check-in" data-toggle="tab"><span><i class="fa fa-check"></i></span>Check In</a></li>
                            <li><a href="#baggage-info" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span>Baggage Information</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="airport-info" class="tab-pane in active">
                                <div class="byf-info-wrap">
                                    <img src="images/42.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Airport Information</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                    <ul>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                        <li>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</li>
                                        <li>Ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                    </ul>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Airport Terminals</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end airport-info -->

                            <div id="visa-passport" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/64.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Passports & Visas</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Custom & Immigration</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <ul>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                        <li>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</li>
                                        <li>Ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                    </ul>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end visa-passport -->

                            <div id="check-in" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/53.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Airport Check-In</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Website Check-In</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end check-in -->

                            <div id="baggage-info" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/12.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Booking of Baggage</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Max Limit Baggage</h3>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                                    <ul>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                        <li>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</li>
                                        <li>Ad duo fugit aeque fabulas, in lucilius prodesset pri.</li>
                                        <li>Veniam delectus ei vis st atqui timeam mnesarchum at.</li>
                                    </ul>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end baggage-info -->

                        </div><!-- end tab-content -->
                    </div><!-- end space-right -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block categories">
                                <h2 class="side-bar-heading">Useful Links</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Flight Stat</a></li>
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Baggage Check-In</a></li>
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Travel Policy</a></li>
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Drink & Meal</a></li>
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Pet Allowance</a></li>
                                    <li><a href="#"><span><i class="fa fa-angle-right"></i></span>Child Booking</a></li>
                                </ul>
                            </div><!-- end side-bar-block -->
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block recent-post">
                                <h2 class="side-bar-heading">Holiday Deals</h2>

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="images/holiday-deal-1.jpg" class="img-reponsive" alt="holiday-deal-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Jakarta Holidays</h5></a>
                                        <span class="date">$200 Per Person</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="images/holiday-deal-2.jpg" class="img-reponsive" alt="holiday-deal-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Prague Holidays</h5></a>
                                        <span class="date">$343 Per Person</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="images/holiday-deal-3.jpg" class="img-reponsive" alt="holiday-deal-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Africa Holidays</h5></a>
                                        <span class="date">$150 Per Person</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block contact">
                                <h2 class="side-bar-heading">Contact Us</h2>
                                <div class="c-list">
                                    <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                    <div class="text"><p>support@star-hotel.com</p></div>
                                </div><!-- end c-list -->

                                <div class="c-list">
                                    <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                    <div class="text"><p>+222 – 5548 656</p></div>
                                </div><!-- end c-list -->

                                <div class="c-list">
                                    <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                    <div class="text"><p>Street No: 1234/A, Blu Vard Area, Main Double Road, UK</p></div>
                                </div><!-- end c-list -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block follow-us">
                                <h2 class="side-bar-heading">Follow Us</h2>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                    <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                    <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                    <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                    <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                </ul>
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end byf-guidelines -->
</section><!-- end innerpage-wrapper -->


<!--======================= BEST FEATURES =====================-->
<section id="best-features" class="banner-padding black-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                    <h3>Best Price Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->


<!--========================= NEWSLETTER-1 ==========================-->
<section id="newsletter-1" class="section-padding back-size newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Subscribe Our Newsletter</h2>
                <p>Subscibe to receive our interesting updates</p>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                            <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                        </div>
                    </div>
                </form>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end newsletter-1 -->


<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

    <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <h3 class="footer-heading">CONTACT US</h3>
                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                        <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                    <h3 class="footer-heading">COMPANY</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Flight</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Cruise</a></li>
                        <li><a href="#">Cars</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">RESOURCES</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                    <h3 class="footer-heading">ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    <ul class="social-links list-inline list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->


<!-- Page Scripts Starts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom-navigation.js"></script>
<!-- Page Scripts Ends -->

</body>
</html>
