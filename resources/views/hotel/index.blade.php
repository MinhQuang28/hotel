
<!doctype html>
<html lang="en">
    <head>
        <title>Hotel Homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->   
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->   
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
            
        <!-- Custom Stylesheets --> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" id="cpswitch" href="css/orange.css">
        <link rel="stylesheet" href="css/responsive.css">
    
        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>
    
    
    <body id="hotel-homepage">
    
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
        <div id="top-bar" class="tb-text-grey">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                                <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login.html"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                <li><a href="registration.html"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li>
                                    <form>
                                        <ul class="list-inline">
                                            <li>
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            
                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
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


        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-3">
            
            <div class="header-absolute">
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" id="mynavbar">
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
                            <a href="{{ url('lav.com') }}" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                        </div><!-- end navbar-header -->
                    
                        <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#" class=>Home<span></span></a>     
                                </li>
                                <li class=""><a href="{{ url('hotels') }}" class="" data-toggle="">Hotels<span></span></a>
                                          
                                </li>
                                <li class=""><a href="{{ url('services') }}" >Services<span></span></a>
                                          
                                </li>
                                <li class=""><a href="{{ url('blog') }}" >Blog<span></span></a>
                                            
                                </li>
                                <li class=""><a href="{{ url('about') }}" >about<span></span></a>          
                                </li>
                                <li class=""><a href="{{ url('contact') }} }}">Contact<span></span></a>
                                           
                                </li>
                               
                                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                            </ul>
                        </div><!-- end navbar collapse -->
                    </div><!-- end container -->
                 </nav><!-- end navbar -->
            </div><!-- end header-absolute -->
            
            <div class="sidenav-content">
                <div id="mySidenav" class="sidenav" >
                    <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>
    
                    <div id="main-menu">
                        <div class="closebtn">
                            <button class="btn btn-default" id="closebtn">&times;</button>
                        </div><!-- end close-btn -->
                        
                        <div class="list-group panel">
                        
                            <a href="{{ url('lav.com') }}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>
                           
                            <a href="" class="list-group-item" ><span><i class="fa fa-plane link-icon"></i></span>Flights<span></span></a>
                            
                            <a href="#hotels-links" class="list-group-item" ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>
                            
                            <a href="#tours-links" class="list-group-item"  ><span><i class="fa fa-globe link-icon"></i></span>Tours<span></span></a>
                            <a href="#cruise-links" class="list-group-item" ><span><i class="fa fa-ship link-icon"></i></span>Cruise<span></span></a>
                           
                            
                         
                        </div><!-- end list-group -->
                    </div><!-- end main-menu -->
                </div><!-- end mySidenav -->
         </div>

<div class="flexslider slider" id="slider-3">
    <ul class="slides">

        <li class="item-1 back-size" style="background:         linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel1.jpg) 50% 65%;
        background-size:cover;
        height:100%;">
    </li><!-- end item-1 -->

    <li class="item-2 back-size" style="background:         linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hotel2.jpg) 50% 65%;
    background-size:cover;
    height:100%;">
</li><!-- end item-2 -->

</ul>
</div><!-- end slider -->

<div class="search-tabs" id="search-tabs-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">

                <ul class="nav nav-tabs">
                    <li><a href="#flights" data-toggle="tab"><span><i class="fa fa-plane"></i></span><span class="st-text">Hotel</span></a></li>

                </ul>

                <div class="tab-content">

                    <div id="flights" class="tab-pane active">
                        <form>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">

                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group left-icon">
                                                <label>To</label>
                                                <input type="text" id="search" name="search" class="form-control" placeholder="City, Country" >
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->                              
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Check In</label>
                                                <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Check Out</label>
                                                <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->                              
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group right-icon">
                                        <label>Adults</label>
                                        <select class="form-control">
                                            <option selected>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                    <button class="btn btn-orange">Search</button>
                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </form>
                    </div><!-- end flights -->

                    <!-- end cruises -->

                    <div id="cars" class="tab-pane">
                        <form>                  
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" />
                                                <i class="fa fa-globe"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" />
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group left-icon">
                                                <label>Your Location</label>
                                                <input type="text" class="form-control" placeholder="Location" />
                                                <i class="fa fa-street-view"></i>
                                            </div>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Check In</label>
                                                <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Check Out</label>
                                                <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                    <button class="btn btn-orange">Search</button>
                                </div><!-- end columns -->

                            </div><!-- end row -->                  
                        </form>
                    </div><!-- end cars -->


                </div><!-- end tab-content -->

            </div><!-- end columns -->

            <div class="hidden-xs hidden-sm col-md-6 no-pd-l">
                <div class="welcome-message">
                    <h2>Find Your Perfect Plan</h2>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper, imeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                    <a href="#" class="btn btn-w-border">Explore More</a>
                </div>
            </div>

        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end search-tabs -->

</section><!-- end flexslider-container -->


<!--======================= BEST FEATURES ======================-->
<section id="best-features" class="banner-padding orange-features">
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


<!--=============== HOTEL OFFERS ===============-->
<section id="hotel-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading white-heading">
                    <h2>Hotels Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                    @foreach ($hotel as $hotel)


                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="hotel-detail-right-sidebar.html">
                                    <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="hotel-detail-right-sidebar.html"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->

                                <div class="main-title hotel-title">
                                    <a href="hotel-detail-right-sidebar.html">{{ $hotel->hotel_name }}</a>
                                    <p>From: Scotland</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->

                    

                    @endforeach

                    

                </div><!-- end owl-hotel-offers -->

                <div class="view-all text-center">
                    <a href="hotel-grid-right-sidebar.html" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->


<!--=============== LUXURY ROOMS ===============-->
<section id="luxury-rooms" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 luxury-img luxury-room-imgs">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/luxury-room-1.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/luxury-room-1.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/luxury-room-2.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/luxury-room-2.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/luxury-room-3.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/luxury-room-3.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/luxury-room-4.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/luxury-room-4.jpg" alt="luxury-room-img">
                        </a>
                    </div>
                </div>

            </div><!-- end columns -->

            <div class="col-sm-12 col-md-12 col-lg-6 luxury-text luxury-room-text">
                <h2>Luxurious Rooms</h2>
                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                <a href="hotel-detail-right-sidebar.html" class="btn btn-black">From $99/Day</a>
                <a href="hotel-detail-right-sidebar.html" class="btn btn-o-border">View Details</a>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end luxury-rooms -->


<!--=============== TESTIMONIALS ===============-->
<section id="testimonials" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading white-heading">
                    <h2>Testimonials</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner text-center">

                        <div class="item active">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                    </div><!-- end carousel-inner -->

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/client-1.jpg" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img src="images/client-2.jpg" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img src="images/client-3.jpg" class="img-responsive"  alt="client-img">
                        </li>
                    </ol>

                </div><!-- end quote-carousel -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonials -->


<!--============== HIGHLIGHTS =============-->
<section id="highlights" class="highlights-2"> 
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div id="boxes">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-plane"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text">
                                    <span class="numbers">2496</span>
                                    <p>Outstanding Tours</p>
                                </div><!-- end h-text -->                           
                            </div><!-- end highlight-box -->                       
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-ship"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text cruise">
                                    <span class="numbers">1906</span>
                                    <p>Worldwide Cruise</p> 
                                </div><!-- end h-text -->                           
                            </div><!-- end highlight-box -->                       
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">  
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-taxi"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text taxi">
                                    <span class="numbers">2033</span>
                                    <p>Luxury Car Booking</p>   
                                </div><!-- end h-text -->                           
                            </div><!-- end highlight-box -->                       
                        </div><!-- end columns -->

                    </div><!-- end boxes -->
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end highlights -->


<!--================ PACKAGES ==============-->
<section id="hotel-packages" class="section-padding"> 
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">           
                <div class="page-heading">
                    <h2>Our Packages</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="row" id="hotel-package-tables">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-10 col-lg-offset-1"> 

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r">
                                <div class="package hotel-package">        
                                    <div class="h-pkg-heading">
                                        <h2 class="h-pkg-title">Luxury Room</h2>
                                        <h2 class="h-pkg-price">$199<span>night</span></h2>
                                    </div><!-- end h-pkg-heading -->

                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                    </div><!-- end features -->
                                    <button class="btn">Select Package</button>  
                                </div><!-- end hotel-package -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r no-pd-l">
                                <div class="package hotel-package best-package">        
                                    <div class="h-pkg-heading">
                                        <h2 class="h-pkg-title">Comfort Room</h2>
                                        <h2 class="h-pkg-price">$199<span>night</span></h2>
                                    </div><!-- end h-pkg-heading -->

                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                    </div><!-- end features -->
                                    <button class="btn">Select Package</button> 
                                </div><!-- end hotel-package -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-l">
                                <div class="package hotel-package">        
                                    <div class="h-pkg-heading">
                                        <h2 class="h-pkg-title">Deluxe Room</h2>
                                        <h2 class="h-pkg-price">$199<span>night</span></h2>
                                    </div><!-- end h-package-heading -->

                                    <div class="pkg-features">
                                        <ul class="list-unstyled text-center">
                                            <li>Breakfast</li>
                                            <li>Private Balcony</li>
                                            <li>Sea View</li>
                                            <li>Free Wifi</li>
                                            <li>Bathroom</li>
                                            <li>Water Heated pool</li>
                                        </ul>
                                    </div><!-- end features -->
                                    <button class="btn">Select Package</button> 
                                </div><!-- end hotel-package -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-packages -->


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



<section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                            <h3 class="footer-heading">OUR COMPANY</h3>
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
                        
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                            <div class="map">
                                <iframe src=        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                            </div>
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
      <script>
 $(document).ready(function() {
  $("#search").autocomplete({

    source: function(request, response) {
      $.ajax({
        url: "{{url('autocomplete')}}",
        data: {
          term : request.term
      },
      dataType: "json",
      success: function(data){
         var resp = $.map(data,function(obj){
                    //console.log(obj.city_name);
                    return obj.city;
                }); 

         response(resp);
     }
 });
  },
  minLength: 1
});
});

</script>   

        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-gallery.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html>