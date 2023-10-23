@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lieu</li>
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
      <section class="form my-4 mx-0">
        <div class="container">
          <a href="{{route('login.dashboard')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-5">
              <img src="{{asset('images/12708.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Lieu</h1>
            <!--endlogo-->
            <!--form-->
              <form action="{{route('lieu.store')}}" method="POST">
                  @csrf
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Lieu</label>
                    <input type="text" name="lieu_nom" placeholder="place" class="form-control my-3  ">
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
