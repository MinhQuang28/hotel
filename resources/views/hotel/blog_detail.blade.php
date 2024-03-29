@extends('home_layer.master')
@section('content1')
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-blog-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Blog</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
    <div id="blog-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar left-side-bar">
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
                            <div class="side-bar-block instagram">
                                <h2 class="side-bar-heading">Instagram</h2>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#"><img src="../images/insta1.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta2.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta3.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta4.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta5.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta6.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta7.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta8.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                    <li><a href="#"><img src="../images/insta9.jpg" class="img-responsive" alt="insta-img" /></a></li>
                                </ul>
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
                                    <div class="text"><p>Street No: 29 tran hung dao, Hanoi, VN</p></div>
                                </div><!-- end c-list -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block recent-post">
                                <h2 class="side-bar-heading">Recent Post</h2>

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="../images/recent-post-1.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Host a Family  Party</h5></a>
                                        <span class="date">27 May, 2017</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="../images/recent-post-2.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Host a Family  Party</h5></a>
                                        <span class="date">27 May, 2017</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                                <div class="recent-block">
                                    <div class="recent-img">
                                        <a href="blog-detail-left-sidebar.html"><img src="../images/recent-post-3.jpg" class="img-reponsive" alt="recent-blog-image" /></a>
                                    </div><!-- end recent-img -->

                                    <div class="recent-text">
                                        <a href="blog-detail-left-sidebar.html"><h5>Host a Family  Party</h5></a>
                                        <span class="date">27 May, 2017</span>
                                    </div><!-- end recent-text -->
                                </div><!-- end recent-block -->

                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->
                    </div><!-- end row -->

                    <div class="row">

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

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block tags">
                                <h2 class="side-bar-heading">Tags</h2>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#" class="btn btn-g-border">SPA</a></li>
                                    <li><a href="#" class="btn btn-g-border">Restaurant</a></li>
                                    <li><a href="#" class="btn btn-g-border">Searvices</a></li>
                                    <li><a href="#" class="btn btn-g-border">Wifi</a></li>
                                    <li><a href="#" class="btn btn-g-border">Tv</a></li>
                                    <li><a href="#" class="btn btn-g-border">Rooms</a></li>
                                    <li><a href="#" class="btn btn-g-border">Pools</a></li>
                                    <li><a href="#" class="btn btn-g-border">Work</a></li>
                                    <li><a href="#" class="btn btn-g-border">Sports</a></li>
                                </ul>
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="space-right">

                        <div class="blog-post">
                            <div class="main-img blog-post-img">
                                <img src="../images/{{ $blog->img1 }}" class="img-responsive" alt="blog-post-image" />
                                <div class="main-mask blog-post-info">
                                    <ul class="list-inline list-unstyled blog-post-info">
                                        <li><span><i class="fa fa-calendar"></i></span>{{ date('M d,Y', strtotime($blog->create_at)) }}</li>
                                        <li><span><i class="fa fa-user"></i></span>By: <a href="#">{{ $blog->author }}</a></li>
                                    </ul>
                                </div>
                            </div><!-- end blog-post-img -->

                            <div class="blog-post-detail">
                                <h2 class="blog-post-title">{{ $blog->title }}</h2>
                                                             {!! $blog->content !!}

                            </div><!-- end blog-post-detail -->

                        </div><!-- end blog-post -->
                        <div id="comments"  >
                            @foreach ($comment as $val)
                                {{-- expr --}}
                           
                               <div class="comment-block">
                                <div class="user-img">
                                   <img src="../images/avatar_user.jpg" height="98" width="98" class="img-responsive" alt="user-img" />
                                </div><!-- end user-img -->

                                <div class="user-text">
                                    <ul class="list-inline list-unstyled">
                                        <li class="user-name">{{ $val->comment_name }}</li>
                                        <li class="date">{{ date('M d,Y', strtotime($val->date)) }}</li>
                                    </ul>
                                    <p>{{ $val->comment }}.</p>
                                    <a href="#"><span><i class="fa fa-reply"></i></span> Reply</a>
                                </div><!-- end user-text -->

                            </div><!-- end comment-block -->
                            @endforeach

                        </div><!-- end comments -->

                        <div id="comment-form">
                            <div class="innerpage-heading">
                                <h1>Add Comment</h1>
                            </div><!-- end innerpage-heading -->

                            <form id="comment_form" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input input-lg" placeholder="Your Name" name="name" id="name"  required/>
                                            <input type="number" name="id_post" id="id_post" hidden="hidden" value="{{ $blog->id }}">
                                        </div>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control input input-lg" placeholder="Your Email"  name="email" id="email" required/>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->

                                <div class="form-group">
                                    <textarea class="form-control input-lg" name="comment" id="comment" rows="5" placeholder="Your Message"></textarea>
                                </div>

                                <input type="submit" name="submit" id="submit" class="btn btn-orange" value="Submit">
                            </form>
                        </div><!-- end comment-form -->

                    </div><!-- end space-right -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end blog-details -->
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
<script type="text/javascript">
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var id=$("#id_post").val();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../add_comment",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
     alert('success');
   }
  })

    $.get('view_comment',{id_post:id},function(data){
         $("#comments").html(data);
                });
 });
 });
 </script>
<!--======================= FOOTER =======================-->
@endsection
