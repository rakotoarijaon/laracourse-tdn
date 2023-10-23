@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Voiture</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Voiture</li>
              <li class="breadcrumb-item"><a href="{{route('voiture.index')}}">List</a></li>
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
          <a href="{{route('voiture.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
            <div class="row no-gutters">
              <div class="col-lg-5">
                <img src="{{asset('images/66815.jpg')}}" class="img-fluid" alt="">
                  </div>
                      <div class="col-lg-7 px-5 pt-5">
                      <!--logo-->
                          <h1 class="font-weight-bold py-3">voiture</h1>
                      <!--endlogo-->
                      <!--form-->
                        <form action="{{route('voiture.store')}}" method="POST">
                          @csrf
                          <div class="form-row">
                            <div class="col-lg-7">
                              <label class="label">Numero</label>
                              <input type="text" name="voiture_numero" placeholder="numero" class="form-control my-3  ">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-lg-7">
                              <label class="label">Type</label>
                              <input type="text" name="voiture_type" placeholder="type" class="form-control">
                            </div>
                          </div>
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
