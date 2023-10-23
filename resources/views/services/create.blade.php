@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Service</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Service</li>
              <li class="breadcrumb-item"><a href="{{route('service.index')}}">List</a></li>
            <li class="breadcrumb-item active">Ajout</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
      <section class="form my-4 mx-0">
        <div class="container">
          <a href="{{route('service.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-5">
              <img src="{{asset('images/28521.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Service</h1>
            <!--endlogo-->
            <!--form-->
              <form action="{{route('service.store')}}" method="POST">
                  @csrf
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Nom du service</label>
                    <input type="text" name="service_nom" placeholder="Nom" class="form-control my-3  ">
                  </div>
                </div>
                <!--
                  <div class="form-row">
                  <div class="col-lg-7">
                    <label for="" class="label">choisir id</label>
                    <select name="" id="" class="form-control mt-1">
                      <option value="">1</option>
                      <option value="">2</option>
                    </select>
                  </div>
                </div>
              -->
                <div class="form-row">
                  <div class="col-lg-7">
                    <button type="submit" class="btn1 mt-3 mb-5">Ajouter</button>
                  </div>
                </div>
              </form>
              <!--endform-->

            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.row (main row) -->
@endsection
