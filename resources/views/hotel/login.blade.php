@extends('home_layer.master')
@section('content1')

<script type="text/javascript">
 function login() {
    var name = document.getElementById("txtAccount").value;
    var pass = document.getElementById("txtPass").value;
    var errAccount = document.getElementById("errAccount");
    var errPass = document.getElementById("errPass");
    var regName =/^.+@[^\.].*\.[a-z]{2,}$/;
    var regPass =/^(?=.*\d).{4,8}$/;

    var count = 0;
    if(name.length==0){
      errAccount.innerHTML = "Enter your account!";
    }else {
      var resName = regName.test(name);
      if (resName) {
        errAccount.innerHTML = "";
        count++;
      }else {
        errAccount.innerHTML = "*eg:examp@gmail.com";
      }
    }

    if (pass.length==0) {
      errPass.innerHTML = "Enter your password!"
    }else{
      var resPass = regPass.test(pass);
      if (resPass) {
        errPass = "";
        count++;
      }else {
        errPass.innerHTML = "it must contain at least 4 : number and letter";
      }
    }
if(count !=2){
   return false;
}
    if(count ==2){
      return true;
      document.getElementById("frm").submit();
    }
       
  }
</script>
<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
             <h1 class="page-title"> Login</h1>
             <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Login Page</li>
            </ul>
        </div><!-- end columns -->
    </div><!-- end row -->
</div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->



<div id="login" class="innerpage-section-padding">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">

             <div class="flex-content">
                <div class="custom-form custom-form-fields">
                    <h3>  
                        @if (Session::has('error1'))
 <div class="alert alert-danger " with='60%'  role="alert">
                        {{Session::get('error1')}}
</div> @else
                Login
                        @endif
</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <form action="{{ route('process_login_user') }}" method="post"  onsubmit="return login()">
                        @csrf
                        <div class="form-group">
                         <input type="text" class="form-control" id="txtAccount" name="email" placeholder="Username"  required/>
                         <span><i class="fa fa-user"></i></span>
                         <span id="errAccount" class="help-block" style="color: red"></span>
                     </div>

                     <div class="form-group">
                         <input type="password" id="txtPass" class="form-control" placeholder="Password"
                         name="pass"  required/>
                         <span><i class="fa fa-lock"></i></span>
                         <span id="errPass" class="help-block" style="color: red"></span>
                     </div>

                     <div class="checkbox">
                         <label><input type="checkbox"> Remember me</label>
                     </div>

                     <button class="btn btn-orange btn-block">Login</button>
                 </form>

                 <div class="other-links">
                     <p class="link-line">New Here ? <a href=" {{ route('registration') }}">Signup</a></p>
                     <a class="simple-link" href="#">Forgot Password ?</a>
                 </div><!-- end other-links -->
             </div><!-- end custom-form -->

             <div class="flex-content-img custom-form-img">
                <img src="images/login.jpg" class="img-responsive" alt="registration-img" />
            </div><!-- end custom-form-img -->
        </div><!-- end form-content -->

    </div><!-- end columns -->
</div><!-- end row -->
</div><!-- end container -->         
</div><!-- end login -->
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

 
<!--======================= FOOTER =======================-->
@endsection