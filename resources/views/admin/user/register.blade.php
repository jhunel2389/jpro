<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jewelry Shop | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{env('FILE_PATH_CUSTOM')}}plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b><img width="226" height="77" src="{{env('FILE_PATH_CUSTOM')}}img/logo_silvershop.png"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register a new membership</p>
    <form action="{{ URL::Route('postRegister') }}" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="{{ old('username') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last name" id="lastname" name="lastname" value="{{ old('lastname') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname" value="{{ old('firstname') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="{{ old('password') }}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" id="terms" name="terms"> I agree to the <a href="javascript:void(0)">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
      {{ csrf_field() }}
    </form>
    <a href="javascript:void(0)">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{env('FILE_PATH_CUSTOM')}}plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{env('FILE_PATH_CUSTOM')}}bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{env('FILE_PATH_CUSTOM')}}plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

</script>
@if($errors->first('username'))
    <script type="text/javascript">
    $('#username').closest('.form-group').append('<span class="help-block">{{$errors->first('username')}}</span>');
    $('#username').closest('.form-group').addClass('has-error');
    </script> 
@endif
@if($errors->first('lastname'))
    <script type="text/javascript">
    $('#lastname').closest('.form-group').append('<span class="help-block">{{$errors->first('lastname')}}</span>');
    $('#lastname').closest('.form-group').addClass('has-error');
    </script> 
@endif
@if($errors->first('firstname'))
    <script type="text/javascript">
    $('#firstname').closest('.form-group').append('<span class="help-block">{{$errors->first('firstname')}}</span>');
    $('#firstname').closest('.form-group').addClass('has-error');
    </script> 
@endif
@if($errors->first('email'))
    <script type="text/javascript">
    $('#email').closest('.form-group').append('<span class="help-block">{{$errors->first('email')}}</span>');
    $('#email').closest('.form-group').addClass('has-error');
    </script> 
@endif
@if($errors->first('password_confirmation'))
    <script type="text/javascript">
    $('#password_confirmation').closest('.form-group').append('<span class="help-block">{{$errors->first('password_confirmation')}}</span>');
    $('#password_confirmation').closest('.form-group').addClass('has-error');
    </script> 
@endif
@if($errors->first('terms'))
    <script type="text/javascript">
    $('#terms').closest('.checkbox').append('<span class="help-block">{{$errors->first('terms')}}</span>');
    $('#terms').closest('.checkbox').addClass('has-error');
    </script> 
@endif
</body>
</html>
