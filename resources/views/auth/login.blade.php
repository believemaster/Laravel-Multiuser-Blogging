<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $shareData['system_name'] }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap Material UI -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/plugins/bootstrap/css/bootstrap-material-design.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/assets/dist/css/adminlte.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}">
        <!-- <img class="align-content" src="{{ asset('public/others') }}/{{ $shareData['admin_logo'] }}" alt=""> -->
        <b>BM</b>News
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Login BM News</p>

    <form method="POST" action="{{ route('login') }}" id="quickForm">
    {{ csrf_field() }}
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder=" Email" name="email" value="{{ old('email') }}" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder=" Password" name="password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>

      @if ($errors->has('email'))
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first('email') }}</strong>
        </span>
      @endif

      @if ($errors->has('password'))
        <span class="help-block">
            <strong class="text-danger">{{ $errors->first('password') }}</strong>
        </span>
      @endif

      <div class="row">
        <div class="col-8">
          <div class="icheck-info">
            <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <hr>
    <div class="social-auth-links text-center mb-3">
      <p>- OR -</p>
      <a href="{{ url('/sign-in/facebook') }}" class="btn btn-block btn-info"><i class="fab fa-facebook mr-2"></i> Sign in using
        Facebook</a>
      <a href="{{ url('/sign-in/google') }}" class="btn btn-block btn-danger"><i class="fab fa-google-plus mr-2"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a class="mb-1" href="{{ route('password.request') }}">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="mb-0 text-center">New Member? Register</a>

  </div>
  <!-- /.card-body login-card-body -->
  </div>
  <!-- /.Card -->
</div>
<!-- /.login-box -->



    <!-- jQuery 3 -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('admin/assets/plugins/iCheck/icheck.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('admin/assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>

    <script>
    $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
        });
    });
    </script>

</body>
</html>


