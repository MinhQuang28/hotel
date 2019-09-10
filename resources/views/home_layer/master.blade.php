<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" id="cpswitch" href="{{ asset('css/orange.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    </head>
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
                <li class="dropdown "><a href="{{ url('Contact') }}">Contact<span></span></a>

                </li>
 @if (Session::has('ma_us'))
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user"></i></span>  &nbsp; {{Session::get('ten_us')}} </a>
                            <ul class="dropdown-menu">
                                <li><a href="hotel-homepage.html"><span><i class="fa fa-user"></i></span> &nbsp; Manager My Account</a></li>
                                <li><a href="hotel-listing-left-sidebar.html"><span><i class="fa fa-dropbox"></i></span> &nbsp;My Orders</a></li>
                                <li><a href="hotel-listing-right-sidebar.html"><span><i class="fa  fa-heart"></i></span> &nbsp;My wishlist</a></li>
                                <li><a href="hotel-grid-left-sidebar.html"><span><i class="fa fa-sign-out"></i></span> &nbsp;Logout</a></li>
                               
                            </ul>     
                            </li>
                   @else
                     <li class="dropdown"><a href="{{ url('login') }}"><span><i class="fa fa-user"></i></span>  &nbsp; Account </a></li>  @endif 
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

                <a href="/" class="list-group-item" ><span><i class="fa fa-home link-icon"></i></span>Home<span></span></a>

                <a href="{{ url('hotels') }}" class="list-group-item active" ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>

                <a href="{{ url('service') }}" class="list-group-item" ><span><i class="fa fa-globe link-icon"></i></span>Service<span></span></a>


                <a href="{{ url('blog') }}" class="list-group-item" ><span><i class="fa fa-ship link-icon"></i></span>Blog<span></span></a>

                <a href="{{ url('contact') }}" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Contact<span></span></a>

                <a href="{{ url('about') }}" class="list-group-item" ><span><i class="fa fa-clone link-icon"></i></span>About<span></span></a>

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


@yield('content1')

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

<!-- Page Scripts Starts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom-navigation.js') }}"></script>
<!-- Page Scripts Ends -->
        <!-- Page Scripts Ends -->
    </body>
</html>

