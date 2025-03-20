<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.inc.ext-css')
</head>
<body style="background: url(/adminlte/dist/img/tornado2.svg) no-repeat center bottom fixed; background-size: cover;">

    <div class="card-header mt-4"  style="border-bottom: none">
        <h4 class="mt-4 text-bold" style="color: #4dffb8">TERRA INDONUSA JAYA</h4>
    </div>
<div class="container" style="margin-top: 100px;">   
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="px-4 w-100 mt-3 mb-5" style="color: #ffffff;">
                            <h1 class="text-center">Welcome to TERRAFM</h1>
                            <p class="text-center">Travel & Facility Management</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card p-4">   
                                <div class="row">
                                            <h3 class="justify-content-center text-center">
                                                Login to your account
                                            </h3>
                                        <div class="card-body">
                                            <form class="login-form mb-4" method="POST" action="https://terrafm.dev.akseshr.com/login">
                                                <input type="hidden" name="_token" value="BFUcYdv0J1aNhd8WtHm5REa1lRAc1RpyehyfJWvd">
                                                <div class="mb-3">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" name="email" class="form-control" placeholder="your@email.com"
                                                        autocomplete="off">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">
                                                        Password
                                                        <span class="form-label-description">
                                                            <a href="#">I forgot password</a>
                                                        </span>
                                                    </label>
                                                    <div class="input-group input-group-flat">
                                                        <input type="password" name="password" class="form-control" placeholder="Your password"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-check">
                                                        <input type="checkbox" class="form-check-input" />
                                                        <span class="form-check-label">Remember me on this device</span>
                                                    </label>
                                                </div>
                                                <div class="form-footer">
                                                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                                </div>
                                            </form>
                                            <div class="card-body border-top">
                                                <div class="row">
                                                    <div class="col"><a href="#" class="btn btn-default w-100">
                                                            Login with Company SSO
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            
                        </div>   
                    </div>
                </div>

                <!-- Login Form -->                

</div>
            
    @include('layouts.inc.ext-js')
</body>
</html>


{{-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
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
</html> --}}
