@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Fonction</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Fonction</li>
              <li class="breadcrumb-item"><a href="{{route('fonction.index')}}">List</a></li>
            <li class="breadcrumb-item active">Modif</li>
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
          <a href="{{route('fonction.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-5">
              <img src="{{asset('images/28521.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Fonction</h1>
            <!--endlogo-->
            <!--form-->
              <form action="{{route('fonction.update',$fonction->id)}}" method="POST">
                  @csrf
                  @method('PATCH')
                <div class="form-row">
                  <div class="col-lg-7">
                    <label class="label">Nom fonction</label>
                    <input type="text" name="fonction_nom" placeholder="numero" class="form-control my-3  " value="{{$fonction->fonction_nom}}">
                  </div>
                </div>
                <!---->
                <div class="form-row">
                  <div class="col-lg-7">
                    <button type="submit" class="btn1 mt-3 mb-5">Modifier</button>
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

