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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <!-- <img class="align-content" src="{{ asset('public/others') }}/{{ $shareData['admin_logo'] }}" alt=""> -->
    <b>BM</b>News
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    <p class="login-box-msg">Register For BM News</p>

    <form action="{{ route('register') }}" method="post">
    {{ csrf_field() }}
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('name') }}</strong>
            </span>
        @endif
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
        @endif
      
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('password') }}</strong>
            </span>
        @endif
      
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-info">
          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            <label for="agreeTerms">
              I agree to the <a href="{{ url('/terms-condition') }}">T&C</a> & <a href="{{ url('/privacy-policy') }}">PP</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col--4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
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

    <a href="{{ route('login') }}" class="text-center mb-0">Already Registered? Login Here</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->



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
