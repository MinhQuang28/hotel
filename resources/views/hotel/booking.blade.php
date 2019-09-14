@extends('home_layer.master')
@section('content1')
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
 <!--========= PAGE-COVER ==========-->
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
                                <p>Hi Lisa, Welcome to Star Travels!</p>
                                <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                            </div><!-- end dashboard-heading -->
                            
                            <div class="dashboard-wrapper">
                            	<div class="row">
                                
                                	<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                		<ul class="nav nav-tabs nav-stacked text-center">
                                    		<li><a href="dashboard.html"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        	<li><a href="user-profile.html"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                            <li  class="active"><a href="#"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                            <li><a href="wishlist.html"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                            <li><a href="cards.html"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Trips You have Booked!</h2>
                                        <div class="dashboard-listing booking-listing">
                                        	<div class="dash-listing-heading">
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio01" name="radio" checked onclick="bill(1)" />
                                                    <label for="radio01"><span></span>All</label>
                                                </div><!-- end custom-radio -->
                                                    
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio02" name="radio" onclick="bill(2)" />
                                                    <label for="radio02"><span></span>Waiting</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio03" name="radio" onclick="bill(3)" />
                                                    <label for="radio03"><span></span>Received</label>
                                                </div><!-- end custom-radio -->
                                                
                                                <div class="custom-radio">
                                                    <input type="radio" id="radio04" name="radio" onclick="bill(4)" />
                                                    <label for="radio04"><span></span>Canceled</label>
                                                </div><!-- end custom-radio -->
                                            </div>
                                            
                                            <div class="table-responsive" >
                                                <table class="table table-hover" id="table_bill">
                                                    <tbody>
                                                         @foreach ($bill as $val)
            {{-- expr --}}
        
        <tr>
            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3> {{ date('d', strtotime($val->check_in)) }}</h3><p>{{ date('M', strtotime($val->check_in)) }}</p></div></td>
            <td class="dash-list-text booking-list-detail">
               <h3>Tom's Restaurant</h3>
               <ul class="list-unstyled booking-info">
                   <li><span>Booking Date:</span> {{ date('d M,Y', strtotime($val->check_in)) }}</li>
                   <li><span>Booking Details:</span> {{ $val->so_luong }} Room</li>
                   <li><span>Client:</span>{{ $val->name }}<span class="line">|</span>{{ $val->email }}<span class="line">|</span>{{ $val->phone }}</li>
               </ul>
               @if($val->status==0)
               <button class="btn btn-orange">Waiting</button>
               @elseif($val->status==4)
               <button class="btn btn-danger">unpaid</button>
               @else
                <button class="btn btn-success">paid</button>
               @endif
           </td>
           <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">View more</button></td>
       </tr>
       @endforeach
                                                    </tbody>
                                                </table>
                                            </div><!-- end table-responsive -->
                                        </div><!-- end booking-listings -->
                                         <div class="pages ">
                                <ol class="pagination">
                                    {{ $bill->links() }}
                                </ol>
                            </div><!-- end pages -->
                        </div><!-- end columns -->
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
        <script type="text/javascript">
            function bill(id) {
                $.get('booking_status',{type:id},function(data){
                    $("#table_bill").html(data);
                });
            }
        </script>
        @endsection