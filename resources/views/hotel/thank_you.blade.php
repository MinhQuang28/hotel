@extends('home_layer.master')
@section('content1')
<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-thank-you">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Thank You</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Thank You</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
    <div id="thank-you" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="space-right">
                        <div class="thank-you-note">
                            <h3>Your Booking is confirmed now. Thank You!</h3>
                            <p>Lorem ipsum dolor sit amet, conse adipiscing elit curabitur.</p>
                            <a href="#" class="btn btn-orange">Print Details</a>
                        </div><!-- end thank-you-note -->

                        <div class="traveler-info">
                            <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Traveler Information</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Booking Number:</td>
                                        <td>#00-{{$get_bill->bill_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Created on:</td>
                                        <td>{{$get_bill->create_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer's Name:</td>
                                        <td>{{$get_bill->name}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Email Address:</td>
                                        <td>{{$get_bill->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hotel Address:</td>
                                        <td>{{$get_bill->hotel_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td>{{$get_bill->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hotel's Name:</td>
                                        <td>{{$get_bill->hotel_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hotel's Address:</td>
                                        <td>{{$get_bill->hotel_address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Type Room & Price:</td>
                                        <td>{{$get_bill->type_name}}/{{$get_bill->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Number Of Rooms:</td>
                                        <td>{{$get_bill->so_luong}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Price:</td>
                                        <td>{{$get_bill->total_money}}</td>
                                    </tr>
                                    <tr>
                                        <td>Deposit:</td>
                                        <td>{{$get_bill->deposit}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->

                            <div class="payment-method">
                                <h3 class="t-info-heading"><span><i class="fa fa-credit-card"></i></span>Payment</h3>
                                <p>Payment is made by the use of:</p>
                                <ul class="list-inline">
                                    <li><img src="images/payment-1.png" class="img-responsive" alt="payment-img" /></li>
                                    <li><img src="images/payment-2.png" class="img-responsive" alt="payment-img" /></li>
                                    <li  class="active"><img src="images/payment-3.png" class="img-responsive" alt="payment-img" /></li>
                                    <li><img src="images/payment-4.png" class="img-responsive" alt="payment-img" /></li>
                                </ul>
                            </div><!-- end payment-method -->
                        </div><!-- end traveler-info -->
                    </div><!-- end space-right -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block recent-post">
                                <h2 class="side-bar-heading">Recent Blog</h2>
                            @foreach ($get_blog as $recent)
                                {{-- expr --}}
                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="{{ url('blogs') }}"><img src="{{URL::to('/')}}/images/{{$recent->img1}}" class="img-reponsive" alt="holiday-deal-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="{{ url('blogs') }}"><h5>{{$recent->title}}</h5></a>
                                        <span class="date">{{$recent->create_at}}</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->
                            @endforeach

                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

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

                        <div class="col-xs-12 col-sm-12 col-md-12">
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
    </div><!-- end thank-you -->
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


