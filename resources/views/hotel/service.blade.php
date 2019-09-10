@extends('home_layer.master')
@section('content1')

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

@endsection
