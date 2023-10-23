@extends('main-layout')
@section('content-header')
<div class="card-body">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
  {{ __('Vous êtes connecté !') }}
</div>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Acceuil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
        <div class="container-fluid">
            Page d'Acceuil
        </div>
    </div>
     <!---->
    <div class="row">
      <div class="  col-lg-4 col-md-4 col-sm-12 ">
        <!-- small box -->
          <div class="card small-box bg-info">
            <div class="inner">
              <h3>{{$chauffeur}}</h3>
                <p>Total Chauffeur</p>
                  </div>
                <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          <a href="{{route('chauffeur.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-md-4 col-sm-12">
        <!-- small box -->
          <div class="card small-box bg-success">
            <div class="inner">
              <h3>{{$voiture}}</h3>
                <p>Total Voiture</p>
                  </div>
                    <div class="icon">
                  <i class="fa-solid fa-car"></i>
                </div>
              <a href="{{route('voiture.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
            </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-md-4 col-sm-12">
        <!-- small box -->
          <div class="card small-box bg-warning">
            <div class="inner">
              <h3>{{$service}}</h3>
                <p>Total Service</p>
                  </div>
                    <div class="icon">
                  <i class="fa-solid fa-gears"></i>
                </div>
              <a href="{{route('service.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
      <!-- ./col -->
    </div>
    <!---->
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <!-- small box -->
          <div class="card small-box bg-danger">
            <div class="inner">
              <h3>{{$fonction}}</h3>
                <p>Total fonction</p>
                  </div>
                    <div class="icon">
                  <i class="fa-sharp fa-solid fa-gear"></i>
                </div>
              <a href="{{route('fonction.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
      <div class=" col-lg-4 col-md-4 col-sm-12">
        <!-- small box -->
          <div class="card small-box bg-default">
            <div class="inner">
              <h3>{{$responsable}}</h3>
                <p>Total Responsable</p>
                  </div>
                    <div class="icon">
                  <i class="fa-solid fa-users"></i>
                </div>
              <a href="{{route('responsable.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-md-4 col-sm-12">
        <!-- small box -->
        <div class="card small-box bg-secondary">
          <div class="inner">
            <h3>{{$course}}</h3>
              <p>Total Course</p>
                </div>
                  <div class="icon">
                <i class="fa-solid fa-map-location"></i>
              </div>
            <a href="{{route('course.index')}}" class="small-box-footer">Plus d’infos<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection


