@extends('home_layer.master')
@section('content1')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
         
        <!--========== PAGE-COVER =========-->
        <section class="page-cover dashboard">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="dashboard-heading">
                                <h2>Travel <span>Profile</span></h2>
                                <p>Hi {{Session::get('ten_us')}}, Welcome to Star Travels!</p>
                                <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                                <div class="row">
                                
                                    <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                        <ul class="nav nav-tabs nav-stacked text-center">
                                            <li class="active"><a href="#"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li><a href="{{ url('booking') }} "><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                            <li><a href=" {{ url('wishlist') }} "><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                            <li><a href=" {{ url('card') }}"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
                                        <h2 class="dash-content-title">My Profile</h2>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Profile Details</h4></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-5 col-md-4 user-img">
                                                        <img src="../images/78.jpg" class="img-responsive" alt="user-img" />

                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-7 col-md-8  user-detail">
                                                        <ul class="list-unstyled">
                                                            <li><span>Name:</span> {{ $info->name }}</li>
                                                            <li><span>Date of Birth:</span>  {{ date('d M,Y', strtotime($info->birth)) }}</li>
                                                            <li><span>Email:</span> {{ $info->email }}</li>
                                                            <li><span>Phone:</span> {{ $info->phone }}</li>
                                                            <li><span>Address:</span> {{ $info->address }}</li>
                                                            <li><span>Country:</span> Viet Nam</li>
                                                        </ul>
                                                        <button class="btn" data-toggle="modal" data-target="#edit-profile">Edit Profile</button>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-12 user-desc">
                                                        <h4>About You</h4>
                                                        <p>My hobbies are listening to music, watching films and travelling. I love many kinds of music; especially, when I fill myself with the sorrow, I love the songs which can share my sadness. I also like watching some US sitcoms such as: How I met your mother, Once upon a time, Sabrina. Additionally, I enjoy travelling and exploring new places with plentiful cuisines and nature, especially walking along the beach in the dusk that make me comfortable and peaceful.</p>
                                                    
                                                    </div><!-- end columns -->
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->          
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->

        
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
        <div id="edit-profile" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Edit Profile</h3>
                    </div><!-- end modal-header -->
                    
                    <div class="modal-body">
                        <form action=" {{ route('update_profile') }}" method="post">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" value="{{ $info->name }}" name="name" placeholder="Name"/>
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" value="{{ $info->birth }}" name="birth" placeholder="mm-dd-yy" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" value="{{ $info->email }}" name="email" placeholder="Email" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" class="form-control" value="{{ $info->phone }}" name="phone" placeholder="Phone Number" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Your image</label>
                               
                            <input type="file" name="file" id="profile-img">
                            <img src="" id="profile-img-tag" width="200px" />
                            </div><!-- end form-group -->
                            
                            <div class="form-group">
                                <label>Your Address</label>
                                <input type="text" class="form-control" value="{{ $info->address }}" placeholder="Address" />
                            </div><!-- end form-group -->
                            
                            <button class="btn btn-orange">Save Changes</button>
                        </form>
                    </div><!-- end modal-bpdy -->
                </div><!-- end modal-content -->
            </div><!-- end modal-dialog -->
        </div><!-- end edit-profile -->
        <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
        @endsection
  