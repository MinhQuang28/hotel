<!doctype html>
<html lang="en">
<head>
    <title>Hotel Detail Left Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->   
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" id="cpswitch" href="../css/orange.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="../css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
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

                   <li><a href="profile"><span>Welcome<i class="fa fa-user"></i> {{Session::get('ten_us')}} </span></a></li>
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
<section class="page-cover" id="cover-hotel-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Hotel {{ $hotel->hotel_name }}</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Hotel</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">           

                <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price">{{ $hotel->price_avg }}$ <span>avg/day</span></h2>

                        <div class="booking-form">
                            <h3>Book Hotel</h3>
                            <p>Find your dream hotel today</p>

                            <form action="{{ route('search_room') }}" method="post">
                                @csrf
                                <input type="number" name="id" value="{{ $hotel->hotel_id }}" hidden="hidden">
                                <div class="form-group">
                                    <input type="text" class="form-control dpd1" value="{{Session::get('check_in')}}"  placeholder="Check-in Date" required/>                                              <i class="fa fa-calendar"></i>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control dpd2" placeholder="check-out Date" value="{{Session::get('check_in')}}" required/>                                            <i class="fa fa-calendar"></i>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                        <div class="form-group right-icon">
                                            <select name="room" class="form-control">
                                                <option selected>Rooms</option>
                                                <option @if (Session::get('room')==1)
                                                selected="selected"
                                                @endif  value='1'>1</option>
                                                <option @if (Session::get('room')==2)
                                                selected="selected"
                                                @endif  value=2>2</option>
                                                <option @if (Session::get('room')==3)
                                                selected="selected"
                                                @endif  value='3'>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">    
                                        <div class="form-group right-icon">
                                            <select name="bed" class="form-control">
                                                <option  selected>Beds</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group right-icon">
                                    <select class="form-control">
                                        <option selected>Payment Method</option>
                                        <option>Credit Card</option>
                                        <option>Paypal</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </div>

                                <div class="checkbox custom-check">
                                    <input type="checkbox" id="check01" name="checkbox"/>
                                    <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                </div>

                                <button class="btn btn-block btn-orange">Search Room</button>
                            </form>

                        </div><!-- end booking-form -->
                    </div><!-- end side-bar-block -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block main-block ad-block">
                                <div class="main-img ad-img">
                                    <a href="#">
                                        <img src="../images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                        <div class="ad-mask">
                                            <div class="ad-text">
                                                <span>Luxury</span>
                                                <h2>Car</h2>
                                                <span>Offer</span>
                                            </div><!-- end ad-text -->
                                        </div><!-- end columns -->
                                    </a>
                                </div><!-- end ad-img -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-12">    
                            <div class="side-bar-block support-block">
                                <h3>Need Help</h3>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                <div class="support-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>+1 123 1234567</p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                    <div class="detail-slider">
                        <div class="feature-slider">
                            <div><img src="../images/{{ $info->img }}" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="../images/{{ $info->img1 }}" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="../images/{{ $info->img2 }}" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="../images/{{ $info->img3 }}" class="img-responsive" alt="feature-img"/></div>
                            <div><img src="../images/{{ $info->img }}" class="img-responsive" alt="feature-img"/></div>
                        </div><!-- end feature-slider -->

                        <div class="feature-slider-nav">
                            <div><img src="../images/{{ $info->img }}" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="../images/{{ $info->img1 }}" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="../images/{{ $info->img2 }}" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="../images/{{ $info->img3 }}" class="img-responsive" alt="feature-thumb"/></div>
                            <div><img src="../images/{{ $info->img }}" class="img-responsive" alt="feature-thumb"/></div>
                        </div><!-- end feature-slider-nav -->
                    </div>  <!-- end detail-slider -->

                    <div class="detail-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#hotel-overview" data-toggle="tab">Hotel Overview</a></li>
                            <li><a href="#restaurant" data-toggle="tab">Restaurant</a></li>
                            <li><a href="#pick-up" data-toggle="tab">Pick Up Services</a></li>
                            <li><a href="#luxury-gym" data-toggle="tab">Luxury Gym</a></li>
                            <li><a href="#sports-club" data-toggle="tab">Address</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="hotel-overview" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="../images/{{ $hotel->img1 }}" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Hotel Overview</h3>
                                        <p>{{ $info->overview }}</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end hotel-overview -->

                            <div id="restaurant" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="../images/{{ $info->img1 }}" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Restaurant</h3>
                                        <p>{{ $info->restaurant }}.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end restaurant -->

                            <div id="pick-up" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="../images/{{ $info->img2 }}" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Pick Up Services</h3>
                                        <p>{{ $info->service }}.</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end pick-up -->

                            <div id="luxury-gym" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="../images/gyms.jpg" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Luxury Gym</h3>
                                        <p>Drive 495 Owner Don Saladino is a personal trainer who has worked with basically all of the superhero celebrities. Think Ryan Reynolds for his role in Deadpool, or Sebastian Stan and Scarlett Johansoon for their roles in Avengers..</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end luxury-gym -->

                            <div id="sports-club" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 tab-img">
                                        <h5>{{ $hotel->hotel_address }}</h5>
                                        <p><iframe height="200px" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14904.17614617304!2d107.03087627865564!3d20.950746626649362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1664996cf687a9a1!2sSaigon%20Halong%20Hotel!5e0!3m2!1sen!2s!4v1567070803737!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end sports-club -->

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->

                    <div class="available-blocks" id="available-rooms">
                        <h2>Available Rooms</h2>
                        @foreach ($room as $rooms)


                        <div class="list-block main-block room-block">
                            <div class="list-content">
                                <div class="main-img list-img room-img">
                                    <a href="#">
                                        <img src="../images/{{ $rooms->img_type }}" class="img-responsive" alt="room-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">${{ $rooms->price }}<span class="divider">|</span><span class="pkg">1 Nights</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end room-img -->

                                <div class="list-info room-info">
                                    <h3 class="block-title"><a href="{{ url('room',[$rooms->type_id]) }}">{{ $rooms->type_name}}</a></h3>
                                    <p class="block-minor">Bed:{{ $rooms->bed }}</p>
                                    <p>{{ $rooms->short_des}}.</p>
                                    <a href="{{ url('room',[$rooms->type_id]) }}" class="btn btn-orange btn-lg">View More</a>
                                </div><!-- end room-info -->
                            </div><!-- end list-content -->
                        </div><!-- end room-block -->

                        @endforeach
                    </div><!-- end available-rooms -->


                    <div class="pages">
                     {{ $room->links() }}
                 </div><!-- end pages -->
             </div><!-- end columns -->

         </div><!-- end row -->
     </div><!-- end container -->
 </div><!-- end hotel-details -->
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
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/custom-navigation.js"></script>
<script src="../js/custom-date-picker.js"></script>
<script src="../js/custom-slick.js"></script>
<!-- Page Scripts Ends -->
</body>
</html>
