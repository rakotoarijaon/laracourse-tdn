<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S'inscrire</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-asset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin-asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-asset/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <p><b>G-</b>COURSE</p>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">S'inscrire</p>
      <form action="{{route('login.save')}}" method="post">
        <!-- Message -->
        @if (Session::get('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                {{Session::get('success')}}
            </div>
        </div>
        @endif
        @if (Session::get('fail'))
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                {{Session::get('fail')}}
            </div>
        </div>
        @endif
    <!-- End message -->
    @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="@Utilisateur nom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="text-danger">
            @error('name')
                {{$message}}
            @enderror
      </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="@Utilisateur email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="@Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="text-danger">
            @error('password')
                {{$message}}
            @enderror
      </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Inscrire</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{route('login.login')}}" >J’ai déjà un compte, connectez-vous</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- jQuery -->
<script src="{{ asset('admin-asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-asset/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
