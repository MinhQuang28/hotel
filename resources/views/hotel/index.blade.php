
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
                <a href="{{ route('home') }}" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href=" {{ route('home') }}" class=>Home<span></span></a>
                    </li>
                    <li class=""><a href="{{ url('hotels') }}" class="" data-toggle="">Hotels<span></span></a>

                    </li>
                    <li class=""><a href="{{ url('service') }}" >Services<span></span></a>

                    </li>
                    <li class=""><a href="{{ url('blogs') }}" >Blog<span></span></a>

                    </li>
                    <li class=""><a href="{{ url('about') }}" >about<span></span></a>          
                    </li>
                    <li class=""><a href="{{ url('Contact')}}">Contact<span></span></a>
                    </li>
                     @if (Session::has('ma_us'))

                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i></span>  &nbsp;{{Session::get('ten_us')}} </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile') }}"><span><i class="fa fa-user"></i></span> &nbsp; Manager My Account</a></li>
                                <li><a href="{{ route('booking') }}"><span><i class="fa fa-dropbox"></i></span> &nbsp;My Orders</a></li>
                                <li><a href="{{ route('wishlist') }}"><span><i class="fa  fa-heart"></i></span> &nbsp;My wishlist</a></li>
                                <li><a href="{{ route('logout_user') }}"><span><i class="fa fa-sign-out"></i></span> &nbsp;Logout</a></li>
                               
                            </ul>     
                            </li>
                   @else
                     <li class="dropdown"><a href="{{ url('login') }}"><span><i class="fa fa-user"></i></span>  &nbsp; Account </a></li>
                       @endif 
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

                <a href=" {{ route('home') }}" class="list-group-item active" ><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>

                <a href="{{ url('hotels') }}" class="list-group-item " ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>

                <a href="{{ url('service') }}" class="list-group-item" ><span><i class="fa fa-globe link-icon"></i></span>Service<span></span></a>


                <a href="{{ url('blog') }}" class="list-group-item" ><span><i class="fa fa-ship link-icon"></i></span>Blog<span></span></a>

                <a href="{{ url('contact') }}" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Contact<span></span></a>

                <a href="{{ url('about') }}" class="list-group-item" ><span><i class="fa fa-clone link-icon"></i></span>About<span></span></a>
                
    @if (Session::has('ma_us'))

        <a href="{{ route('profile') }}" class="list-group-item"><span><i class="fa fa-user"></i></span>  &nbsp;{{Session::get('ten_us')}} </a>
                          
                   @else
                    <a href="{{ url('login') }}" class="list-group-item"><span><i class="fa fa-user"></i></span>  &nbsp; Account </a>
                       @endif 



            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div>

<div class="flexslider slider" id="slider-3">
    <ul class="slides">

        <li class="item-1 back-size" style="background:         linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/51.jpg) 50% 65%;
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
                        <form action="{{ route('search') }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">

                                        <!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group left-icon">
                                                <label>To</label>
                                                <input type="text" id="search" name="city" class="form-control" placeholder="City, Country" >
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
                                                <input type="text" class="form-control dpd1" name="check_in" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group left-icon">
                                                <label>Check Out</label>
                                                <input type="text" class="form-control dpd2" name="check_out" placeholder="mm/dd/yy" >
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->                              
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group right-icon">
                                        <label>Adults</label>
                                        <select class="form-control" name="guest">
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
                    <p>HOTELS, RESORTS, HOSTELS & MORE
                    Get the best prices on 2,000,000+ properties, worldwide</p>
                    <p>Book Things to Do Worldwide!
                        We offer over thousands of sightseeing tours and activities in hundreds of destinations worldwide.
                    </p>
                    <p>Thank you</p>

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
                    <p>You will find the best prices with us and we are willing to match any lower price.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                    <p>The best security teams will keep you and your trip safe despite all situations.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                    <p>Contact with us for more information and more promotion. We always update more. If you concern, give us your email</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                    <p>Read about guidelines of contact with us for have more advices before booking your trip</p>
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
                                <a href="{{ url('hotel',[$hotel->hotel_id]) }}">
                                    <img src="../images/{{$hotel->img1}}" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">${{ $hotel->price_avg }}<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
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
                                    <a href="{{ url('hotel',[$hotel->hotel_id]) }}">{{ $hotel->hotel_name }}</a>
                                    <p>From: Scotland</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->

                    

                    @endforeach

                    

                </div><!-- end owl-hotel-offers -->

                <div class="view-all text-center">
                    <a href="{{ url('hotels') }}" class="btn btn-orange">View All</a>
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
                        <a href="images/55.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/55.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/64.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/64.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/59.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/59.jpg" alt="luxury-room-img">
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-6 luxury-room-block">
                        <a href="images/65.jpg" title="image-7" class="with-caption gallery image-link">
                            <img class="img-responsive" src="images/65.jpg" alt="luxury-room-img">
                        </a>
                    </div>
                </div>

            </div><!-- end columns -->

            <div class="col-sm-12 col-md-12 col-lg-6 luxury-text luxury-room-text">
                <h2>Crowne Plaza Times Square</h2>
                <p>Crowne Plaza Times Square tọa lạc tại thành phố Đà Lạt, trong bán kính 1,7 km từ Hồ Xuân Hương và 1,7 km từ Công viên Yersin. Nhà trọ có nhà hàng, khu vườn, sảnh khách chung, Wi-Fi miễn phí, dịch vụ đặt vé, sân hiên, dịch vụ phòng, máy ATM và dịch vụ thu đổi ngoại tệ cho khách..</p>
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
                            <blockquote>So many false promises - Hotel book in room says “rooftop bar with extensive cocktail menu” yet there is no bar!? When I raised this to staff they did not seem to care. The “free bikes” .. there was only two available and they were falling apart not safe to drive which really put a downer on our trip as we love cycling. The rooftop pool was dirty and there is no view of the beach. Place is like a building site bricks everywhere outside, constant drilling and no electric for 40 mins with no communication from staff. Staff do not speak English well very hard to communicate.
Room was good size Night staff are better than day - male attendant brought us new kettle as our one given was dirty</blockquote>
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
                            <blockquote> Breakfast is not an “American style buffet” as described it is catered only for Vietnamese cuisine. Also in a tiny room which is very uncomfortable and overcrowded. The description says “boasts a restaurant” there is no restaurant. We found a dirty sock under the bed, the cleaner did not give us toilet roll or change sheets. The room is quite dirty ie. the walls and cupboards and the card holder on wall for electric is falling apart too. Paper thin walls..</blockquote>
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
                            <blockquote> Breakfast is not an “American style buffet” as described it is catered only for Vietnamese cuisine. Also in a tiny room which is very uncomfortable and overcrowded. The description says “boasts a restaurant” there is no restaurant. We found a dirty sock under the bed, the cleaner did not give us toilet roll or change sheets. The room is quite dirty ie. the walls and cupboards and the card holder on wall for electric is falling apart too. Paper thin walls.</blockquote>
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
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/author2.png" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img src="images/author.png" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img src="images/author1.jpg" class="img-responsive"  alt="client-img">
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
                    <p>Choose us and enjoy your trip</p>
                    <p>We love you and we hope you will have a lot of fun</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.419253995984!2d105.84151262461423!3d21.00427374404641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac768ffe1abd%3A0x22b136bcf1c08e2a!2sBach%20Khoa%2C%20Hai%20B%C3%A0%20Tr%C6%B0ng%20District%2C%20Hanoi%2C%20Vietnam!5e0!3m2!1sen!2s!4v1567043873278!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
