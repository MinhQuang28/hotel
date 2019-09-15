@extends('home_layer.master')
@section('content1')

<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-byf-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Our Service</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Our Service</li>
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
                            <li class="active"><a href="#airport-info" data-toggle="tab"><span><i class="fa fa-building"></i></span>Services</a></li>
                            <li><a href="#visa-passport" data-toggle="tab"><span><i class="fa fa-ticket"></i></span>View</a></li>
                            <li><a href="#check-in" data-toggle="tab"><span><i class="fa fa-check"></i></span>Restaurant & Street Food</a></li>
                            <li><a href="#baggage-info" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span>Room</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="airport-info" class="tab-pane in active">
                                <div class="byf-info-wrap">
                                    <img src="images/42.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Services</h3>
                                    <p>First things first, Imma say all the words inside my head that I am very proud of what we did and what we are doing here. We provide the best of services for our customer and that is the reason why you should choose starTravel as top priority</p>
                                    <p>Second things second, don't you think so? Let me show you why you should choose us instead of some unprofessional booking websites which you've already known:</p>
                                    <ul>
                                        <li>Everyone who is working here, they all came from empty handed. That's why they know how to please customers (so that they will not lose their job :D)</li>
                                        <li>The view is spacious and cool. You can feel mama nature from any places in our list</li>
                                        <li>We are planning to raise funds for charity and changing all the poor's lives</li>
                                        <li>All vehicles here runs by electricity so that is very good for the enviroment</li>
                                        <li>We also have a lot of clubs that will bring you lots of experience and happiness (if you know what i means :D)</li>
                                    </ul>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Our desire</h3>
                                    <p>Third things third, send all your comments, your opions and your ideas. We take it all in order to develop our services to the best of the best services ever. We will make you a beliver :D</p>
                                    
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end airport-info -->

                            <div id="visa-passport" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/64.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">View</h3>
                                    <p>In the city, you must wake up every moring with weariness and have to working hard for your future. How about taking some days off and pick up all your luggages and have some trips with your friends to relax?</p>
                                    <p>There will be no crowded places, no techs, no polluted air. There are all good views. Enjoy with all your lovers and relax your head because you worthy.</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">From the highest to the deepest</h3>
                                    <p>A hotel can not be built on the mountain of on the sea? Only you dont know that. We are having a various system of hotel's services for travelers who don't like to stay all day in their room, who want to explore every strange places. Go on and check our system. You will be suprised </p>
                                    <ul>
                                        <li>Climbing one of the highest mountains with your love, why not?</li>
                                        <li>Haven't go on a yacht before? Try it</li>
                                        <li>Are you a daredevil? Try our skydiving and jump out from the highest altitude</li>
                                        <li>Swimming with sharks? Worth to try once :D</li>
                                        <li>Having dinner with Obama? You can even play golf with him :D</li>
                                    </ul>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end visa-passport -->

                            <div id="check-in" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/53.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Restaurant</h3>
                                    <p>If you are a foody, you are welcome to skip. But if you're not, we have a lot of luxury restaurants for you to pick. From the cheapest to the most expensive place, depending on your wallet so give a smart choice</p>
                                    <p>We do all the test and check all the food before it is cooked for customers. It will be 99,99% that our food is very healthy and suitable with all styles</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Street Food</h3>
                                    <p>You are tired of eating in fancy restaurants? You are sick of eating fancy food? Try our Street Food now. All countries from all around the world with all of their traditional foods. I think you will be impressed by the way making the food and the way it taste</p>
                                </div><!-- end byf-info-wrap -->
                            </div><!-- end check-in -->

                            <div id="baggage-info" class="tab-pane">
                                <div class="byf-info-wrap">
                                    <img src="images/12.jpg" class="img-responsive" alt="byf-info-img">
                                    <h3 class="byf-info-heading">Go on with family</h3>
                                    <p>You are hard to make friends with people of want to spend more time with family. Book a trip and believe in us. We will make sure you and your family will have a great time together. We have never been out of room so dont worry about that. Your joy is our satisfaction</p>
                                </div><!-- end byf-info-wrap -->

                                <div class="byf-info-wrap">
                                    <h3 class="byf-info-heading">Some rules you may want to know</h3>
                                    <p>To make sure that every customers will be fair, we have some rules in our system for customer.</p>
                                    <p>You may think that it is nonsense but we are people, show some respect with the others who dont have much condition</p>
                                    <ul>
                                        <li>Animals ARE ALLOWED in our system, we have special room for animal too</li>
                                        <li>Respect other customer when doing check in because we will watch from everywhere</li>
                                        <li>Children have their own services so call us if you have some problems with them who aren't yours</li>
                                        <li>Elder always be priority in every circumstances</li>
                                        <li>Keep the enviroment clean arround you</li>
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
                                <h2 class="side-bar-heading">Recent Blogs</h2>
                                @foreach ($service as $blog)
                                    {{-- expr --}}
                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="{{ URL::to('/') }}/images/{{ $blog->img1 }}" class="img-reponsive" alt="holiday-deal-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>{{ $blog->title }}</h5></a>
                                        <span class="date">{{ $blog->create_at }}</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->
                                 @endforeach

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
                                    <div class="text"><p>+88.66.43.465</p></div>
                                </div><!-- end c-list -->

                                <div class="c-list">
                                    <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                    <div class="text"><p>Street No: 29 tran hung dao, Hanoi, VN</p></div>
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
