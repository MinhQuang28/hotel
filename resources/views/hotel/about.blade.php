<!doctype html>
<html lang="en">
    <head>
        <title>About Us</title>
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
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
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
                        <li class="dropdown active"><a href="{{ url('about') }}">About<span></span></a>
                                   
                        </li>
                        <li class="dropdown contact"><a href="{{ url('Contact') }}">Contact<span></span></a>
                                    
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
                     <li class="dropdown"><a href="{{ url('login') }}"><span><i class="fa fa-user"></i></span>  &nbsp; Account </a></li>@endif
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
                      
                        <a href="{{ url('hotels') }}" class="list-group-item " ><span><i class="fa fa-building link-icon"></i></span>Hotels<span></span></a>
                        
                        <a href="{{ url('Service') }}" class="list-group-item" ><span><i class="fa fa-globe link-icon"></i></span>Service<span></span></a>
                        
                        
                        <a href="{{ url('blog') }}" class="list-group-item" ><span><i class="fa fa-ship link-icon"></i></span>Blog<span></span></a>
                        
                        <a href="{{ url('contact') }}" class="list-group-item" ><span><i class="fa fa-car link-icon"></i></span>Contact<span></span></a>
                        
                        <a href="{{ url('about') }}" class="list-group-item active" ><span><i class="fa fa-clone link-icon"></i></span>About<span></span></a>
                        
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">About Us Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">About Us Page</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="about-us">

                <div id="about-content" class="section-padding"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="flex-content">
                                
                                    <div class="flex-content-img about-img">
                                        <img src="images/43.jpg" class="img-responsive" alt="about-img" />
                                    </div><!-- end about-img -->
                                    
                                    <div class="about-text">
                                        <div class="about-detail">
                                            <h2>About Star Travels</h2>
                                            <p>Opened in 1891, the Hotel Australia was one of Sydney's finest establishments, providing high quality accommodation,
                                                dining and entertainment to some of the city's most distinguished visitors and residents. The first Hotel Australia building
                                                faced Castlereagh Street, with a large entrance and foyer.
                                                During the 1920s an extension was built to the north of the main hotel, with its entrance on Martin Place.
                                                This building was designed by Emil Sodersten, and was a modernist building of the most striking Art Deco design,
                                                a mix of glass – mainly black and silver – stainless steel, marble and Australian woods. The entrance foyer was a
                                                fantasy of black Carrara marble,
                                                black glass with silver etchings, and mirrors. With entrances from Castlereagh Street, Martin Place, and Rowe Street
                                                , it was the 'showplace' of the city, with a banqueting hall, several bars, and an 'intimate' dining room,
                                                called the Bevery. Its streamlined interiors were linked by a sweeping, elliptical
                                                stairway set against an enfolding wall of black glass, incised with fantastic birds and foliage in silver..</p>
                                        </div><!-- end about-detail -->
                                    </div><!-- end about-text -->
                                    
                                </div><!-- end flex-content -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end about-content -->
                
                <div id="video-banner" class="banner-padding back-size"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Take a Video Tour</h2>
                                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                                
                                <a href="https://www.youtube.com/watch?v=HbwyD6DddJg" class="popup-youtube" id="play-button"><span><i class="fa fa-play"></i></span></a>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end video-banner -->
                
                <div id="team" class="section-padding"> 
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-heading">
                                    <h2>Meet Our Team</h2>
                                    <hr class="heading-line" />
                                </div><!-- end page-heading -->
                        
                                <div class="owl-carousel owl-theme" id="owl-team">
                                
                                    <div class="item">
                                        <div class="member-block">
                                            <div class="member-img">
                                                <img src="images/author5.jpg" class="img-responsive img-circle" alt="member-img" />
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                </ul>       
                                            </div><!-- end member-img -->
                                            
                                            <div class="member-name">
                                                <h3>John </h3>
                                                <p>Director</p>
                                            </div><!-- end member-name -->
                                        </div><!-- end member-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="member-block">
                                            <div class="member-img">
                                                <img src="images/author4.jpg" class="img-responsive img-circle" alt="member-img" />
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                </ul>       
                                            </div><!-- end member-img -->
                                            
                                            <div class="member-name">
                                                <h3>medusa</h3>
                                                <p>creater</p>
                                            </div><!-- end member-name -->
                                        </div><!-- end member-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="member-block">
                                            <div class="member-img">
                                                <img src="images/author2.png" class="img-responsive img-circle" alt="member-img" />
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                </ul>       
                                            </div><!-- end member-img -->
                                            
                                            <div class="member-name">
                                                <h3>catlyn</h3>
                                                <p>manager</p>
                                            </div><!-- end member-name -->
                                        </div><!-- end member-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="member-block">
                                            <div class="member-img">
                                                <img src="images/author.png" class="img-responsive img-circle" alt="member-img" />
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                </ul>       
                                            </div><!-- end member-img -->
                                            
                                            <div class="member-name">
                                                <h3>yasua</h3>
                                                <p>developer</p>
                                            </div><!-- end member-name -->
                                        </div><!-- end member-block -->
                                    </div><!-- end item -->
                                    
                                    <div class="item">
                                        <div class="member-block">
                                            <div class="member-img">
                                                <img src="images/author1.jpg" class="img-responsive img-circle" alt="member-img" />
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                    <li><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                </ul>       
                                            </div><!-- end member-img -->
                                            
                                            <div class="member-name">
                                                <h3>demoom</h3>
                                                <p>support</p>
                                            </div><!-- end member-name -->
                                        </div><!-- end member-block -->
                                    </div><!-- end item -->
                                    
                                </div><!-- end owl-team -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end team -->
                            
            </div><!-- end about-us -->
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
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-video.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
