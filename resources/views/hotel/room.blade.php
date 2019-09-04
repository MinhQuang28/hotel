<!doctype html>
<html lang="en">
<head>
    <title>Cruise Detail Left Sidebar</title>
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

    <!-- Date-Picker Stylesheet -->
    <link rel="stylesheet" href="../css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
</head>


<body id="main-homepage">
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

<!--================== PAGE-COVER ================-->
<section class="page-cover" id="cover-cruise-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <h1 class="page-title">Cruise Detail Left Sidebar</h1>
               <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cruise Detail Left Sidebar</li>
            </ul>
        </div><!-- end columns -->
    </div><!-- end row -->
</div><!-- end container -->
</section><!-- end page-cover -->


<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
   <div id="cruise-details" class="innerpage-section-padding">
    <div class="container">
        <div class="row">        	

            <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                <div class="side-bar-block booking-form-block">
                   <h2 class="selected-price"><font id="price_select">${{ $room->price }}</font>.00 <span>/Day</span></h2>

                   <div class="booking-form">
                       <h3>Book Cruise</h3>
                       <p>Find your dream cruise today</p>

                       <form @if (Session::has('ma_us')) action="{{ route('proocess_booking') }}"  @endif method="post" >

                            @csrf


                        <div class="form-group">
                          <input type="text" class="form-control" value="{{ Session::get('ten_us') }}" placeholder="Name" required/>                                       
                      </div>
                      <input type="number" name="tong_tien" id="tong_tien" value="" hidden="hidden">
                      <div class="form-group">
                          <input type="email" class="form-control"  placeholder="Email" required/>                                       
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Phone" required/>                                       
                      </div>



                      <div class="form-group">
                          <input type="text" class="form-control dpd1" name="check_in" value="{{ Session::get('check_in') }}" placeholder="Check-in Date" required/>                                       		<i class="fa fa-calendar"></i>
                      </div>

                      <div class="form-group">
                          <input type="text" value='{{ Session::get('check_out') }}' class="form-control dpd2" placeholder="Check-out Date" name="check_out" required/>                                       		<i class="fa fa-calendar"></i>
                      </div>

                      <div class="form-group right-icon">
                        <select id="select-room" required class="form-control"   onchange="myFunction()">
                            <option>Room</option>
                            <option value="1">1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                        </select>
                        <i class="fa fa-angle-down"></i>
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

                   <button   @if (!Session::has('ma_us'))
                   data-toggle="modal" data-target="#booking_check"
                   @endif  class="btn btn-block btn-orange">Confirm Booking</button>
               </form>
<script type="text/javascript">

function myFunction() {
var x = document.getElementById("select-room").value;
var s=x*{{ $room->price }};
document.getElementById("tong_tien").value = s;
document.getElementById("price_select").innerHTML=s;
  }
  </script>
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
            <div><img src="../images/{{ $room->img }}" class="img-responsive" alt="feature-img"/></div>
            <div><img src="../images/{{ $room->img1 }}" class="img-responsive" alt="feature-img"/></div>
            <div><img src="../images/{{ $room->img2 }}" class="img-responsive" alt="feature-img"/></div>
            <div><img src="../images/{{ $room->img3 }}" class="img-responsive" alt="feature-img"/></div>
            <div><img src="../images/{{ $room->img }}" class="img-responsive" alt="feature-img"/></div>
        </div><!-- end feature-slider -->

        <div class="feature-slider-nav">
            <div><img src="../images/{{ $room->img }}" class="img-responsive" alt="feature-thumb"/></div>
            <div><img src="../images/{{ $room->img1 }}" class="img-responsive" alt="feature-thumb"/></div>
            <div><img src="../images/{{ $room->img2 }}" class="img-responsive" alt="feature-thumb"/></div>
            <div><img src="../images/{{ $room->img3 }}" class="img-responsive" alt="feature-thumb"/></div>
            <div><img src="../images/{{ $room->img }}" class="img-responsive" alt="feature-thumb"/></div>
        </div><!-- end feature-slider-nav -->

        <ul class="list-unstyled features tour-features">
           <li><div class="f-icon"><i class="fa fa-bed"></i></div><div class="f-text"><p class="f-heading">bed</p><p class="f-data">{{{ $room->bed }}}</p></div></li>
           <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">1 DAYS</p></div></li>
           <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li>
       </ul>
   </div><!-- end detail-slider -->  

   <div class="detail-tabs">
       <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#cruise-information" data-toggle="tab">Room Information</a></li>
        <li><a href="#crs-features" data-toggle="tab">Overview</a></li>
        <li><a href="#cabins" data-toggle="tab">Cabins</a></li>
        <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
    </ul>

    <div class="tab-content">

        <div id="cruise-information" class="tab-pane in active">
           <div class="row">
              <div class="col-sm-4 col-md-4 tab-img">
                  <img src="../images/{{ $room->img }}" class="img-responsive" alt="flight-detail-img" />
              </div><!-- end columns -->

              <div class="col-sm-8 col-md-8 tab-text">
                  <h3>Cruise Information</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div><!-- end columns -->
          </div><!-- end row -->
      </div><!-- end cruise-information -->

      <div id="crs-features" class="tab-pane">
       <div class="row">
          <div class="col-sm-4 col-md-4 tab-img">
              <img src="../images/{{ $room->img1 }}" class="img-responsive" alt="flight-detail-img" />
          </div><!-- end columns -->

          <div class="col-sm-8 col-md-8 tab-text">
              <h3>Features</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
          </div><!-- end columns -->
      </div><!-- end row -->
  </div><!-- end crs-features -->

  <div id="cabins" class="tab-pane">
   <div class="row">
      <div class="col-sm-4 col-md-4 tab-img">
          <img src="../images/{{ $room->img2 }}" class="img-responsive" alt="flight-detail-img" />
      </div><!-- end columns -->

      <div class="col-sm-8 col-md-8 tab-text">
          <h3>Cabins</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div><!-- end columns -->
  </div><!-- end row -->
</div><!-- end cabins -->

<div id="reviews" class="tab-pane">
   <div class="row">
      <div class="col-sm-4 col-md-4 tab-img">
          <img src="../images/{{ $room->img3 }}" class="img-responsive" alt="flight-detail-img" />
      </div><!-- end columns -->

      <div class="col-sm-8 col-md-8 tab-text">
          <h3>Reviews</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div><!-- end columns -->
  </div><!-- end row -->
</div><!-- end reviews -->

</div><!-- end tab-content -->
</div><!-- end detail-tabs -->

<div class="available-blocks" id="available-tours">
   <h2>Available Tours</h2>
   @foreach (  $hotel as $value)


   <div class="list-block main-block crs-list-block">
    <div class="list-content">
        <div class="main-img list-img crs-list-img">
            <a href="cruise-detail-left-sidebar.html">
                <img src="../images/{{ $value->img1 }}" class="img-responsive" alt="cruise-img" />
            </a>
            <div class="main-mask">
                <ul class="list-unstyled list-inline offer-price-1">
                    <li class="price">{{ $value->price_avg }}<span class="divider">|</span><span class="pkg">1 Night, 1 Days</span></li>
                    <li class="rating">
                        <span><i class="fa fa-star orange"></i></span>
                        <span><i class="fa fa-star orange"></i></span>
                        <span><i class="fa fa-star orange"></i></span>
                        <span><i class="fa fa-star orange"></i></span>
                        <span><i class="fa fa-star lightgrey"></i></span>
                    </li>
                </ul>
            </div><!-- end main-mask -->
        </div><!-- end crs-list-img -->

        <div class="list-info crs-list-info">
            <h3 class="block-title"><a href="cruise-detail-left-sidebar.html">{{ $value->hotel_name }}</a></h3>
            <p class="block-minor">{{ $value->hotel_address }}</p>
            <p>{{ $value->describ }}.</p>
            <a href="{{ url('hotel',[$value->hotel_id]) }}" class="btn btn-orange btn-lg">View More</a>
        </div><!-- end crs-list-info -->
    </div><!-- end list-content -->
</div><!-- end crs-list-block -->
@endforeach


</div><!-- end available-tours -->


<div class="pages">
  {{ $hotel->links() }}
</div><!-- end pages -->
</div><!-- end columns -->

</div><!-- end row -->
</div><!-- end container -->
</div><!-- end cruise-details -->
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

<div id="booking_check" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Warning</h3>
            </div><!-- end modal-header -->

            <div class="modal-body">
               <div class="alert alert-warning" role="alert">
                  You need Login after booking !
              </div>

              <a href="{{ url('login') }}" class="btn btn-orange">Login Now</a>

          </div><!-- end modal-bpdy -->
      </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end edit-profile -->

<!-- Page Scripts Starts -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/custom-navigation.js"></script>
<script src="../js/custom-date-picker.js"></script>
<script src="../js/custom-slick.js"></script>
<!-- Page Scripts Ends -->

</body>
</html>
