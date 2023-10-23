@extends('show')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    
    <div class="row">
        <a href="{{route('login.dashboard')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Profil</h3>
        <table class="table m-20">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Date d'insrciption</th>
                <th scope="col">Status</th>
                <th scope="col">option</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$LoggedUserInfo['name']}}</td>
                <td>{{$LoggedUserInfo['email']}}</td>
                <td>{{$LoggedUserInfo['created_at']}}</td>
                <td><i class="fa-solid fa-circle" style="color: #16825D"></i>Connecté</td>
                <td><a href="{{route('login.logout')}}">Déconnexion</a></td>
              </tr>
            </tbody>
          </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection