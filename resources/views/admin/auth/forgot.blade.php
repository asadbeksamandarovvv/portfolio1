<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../backend/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../../backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../backend/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

    @include('_message')

    <div class="login-logo">
        <a><b>my Portfolio</b><br>Forgot</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{url('forgot_admin')}}" method="post">
                    @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" required value="{{old('email')}}">
                    <span style="color: red">{{$errors->first('email')}}</span>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <p class="mb-1">
                    <a href="{{url('login')}}">Log in</a>
                </p>

            </form>

    </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../../backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../backend/dist/js/adminlte.min.js"></script>
</body>
</html>
