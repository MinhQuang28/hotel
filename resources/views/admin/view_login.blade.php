
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">
  <!-- Theme style -->
 
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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

    if(count ==2){
      document.getElementById("frm").submit();
    }
       
  }
</script>

 
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
    @if (Session::has('error'))
                                        <div class="callout callout-info">
                                            {{Session::get('error')}}
                                       </div>
                                    @endif

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form id="frm" action="{{route('process_login')}}" method="post">
      @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="txtAccount" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <span id="errAccount" class="help-block" style="color: red"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="txtPass" name="mat_khau" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <span id="errPass" class="help-block" style="color: red"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="button"  onclick="login()" value="Signin" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- jQuery 3 -->

<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
   
</script>
</body>
</html>
