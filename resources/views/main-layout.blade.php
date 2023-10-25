<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G- Course</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin-asset/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin-asset/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/dashboard.css')}}">

  <!-- jquery -->
  <script src="{{asset('assets/jquery/jquery.js')}}"></script>
    <script>
      $(document).ready(function() {
        var url = window.location.href;
          $(' li a[href="' + url + '"]').addClass('active');
      });
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin-asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa-solid fa-user"></i>
              </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="{{route('login.logout')}}" class="dropdown-item">
            Déconnexion
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
      <img src="{{asset('admin-asset/dist/img/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">G - COURSE</span>
    </p>
    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img   src="{{asset('admin-asset/dist/img/utilisateur.jpg')}}" class="img-circle elevation-2" alt="User Image"><i class="fa-solid fa-circle ml-10" style="color: #16825D " style="padding-left: -20px"></i>
        </div>
        <div class="info">
          <a href="{{route('login.profil')}}" class="d-block">{{$LoggedUserInfo['name']}}</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <!--dashboard-->
            <li class="nav-item">
                <a href="{{route('login.dashboard')}}" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Acceuil
                    </p>
                </a>
            </li>
            <!---->
            <!--Chauffeur-->
            <li class="nav-item">
              <a href="{{route('chauffeur.index')}}" class="nav-link " >
                <i class="ion ion-person-add"></i>
                  <p>
                    Chauffeur
                  </p>
              </a>
            </li>
            <!---->
            <!--Voiture-->
            <li class="nav-item">
              <a href="{{route('voiture.index')}}" class="nav-link " >
                <i class="fa-solid fa-car"></i>
                  <p>
                    Voiture
                  </p>
              </a>
            </li>
          <!---->
          <!-- Service-->
          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link " >
              <i class="fa-solid fa-gears"></i>
                <p>
                  Service
                </p>
            </a>
          </li>
          <!---->
          <!--Fonction-->
          <li class="nav-item">
            <a href="{{route('fonction.index')}}" class="nav-link " >
              <i class="fa-sharp fa-solid fa-gear"></i>
                <p>
                  Fonction
                </p>
            </a>
          </li>
          <!---->
          <!--Responsable-->
          <li class="nav-item">
            <a href="{{route('responsable.index')}}" class="nav-link " >
              <i class="fa-solid fa-users"></i>
                <p>
                  Responsable
                </p>
            </a>
          </li>
          <!---->
          <!-- Course-->
          <li class="nav-item">
            <a href="{{route('course.index')}}" class="nav-link " >
              <i class="fa-solid fa-map-location"></i>
                <p>
                  Course
                </p>
            </a>
          </li>
        <!---->

        </ul>
      </nav>
 <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        @yield('content-header')
          <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                @yield('body')
              </div>
              <!-- /.container-fluid -->
            </section>
          <!-- /.content -->
      <!-- /.content-wrapper -->
    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- jQuery -->
<script src="{{asset('admin-asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-asset/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin-asset/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin-asset/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin-asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin-asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin-asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin-asset/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin-asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin-asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin-asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-asset/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-asset/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin-asset/dist/js/pages/dashboard.js')}}"></script>
</body>

</html>
