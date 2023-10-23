@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Responsable</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
            <li class="breadcrumb-item active">Responsable</li>
            <li class="breadcrumb-item"><a href="{{route('responsable.index')}}">List</a></li>
            <li class="breadcrumb-item active">Ajout</li>
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
      <section class="form my-4 mx-0s">
        <div class="container">
          <a href="{{route('responsable.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Responsable</h1>
            <!--endlogo-->
            <!--form-->
              <form action="{{route('responsable.store')}}" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Responsable matricule</label>
                    <input type="text"  placeholder="Votre matricule" class="form-control my-3  " name="responsable_matricule">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Responsable Nom</label>
                    <input type="text"  placeholder="Votre nom" name="responsable_nom" class="form-control">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label"> Responsable Prenom</label>
                    <input type="text"  placeholder="Votre prénom" name="responsable_prenom" class="form-control">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label for="" class="label">service</label>
                    <select class="form-control mt-1" name="service_id">
                      <option type="hidden">------</option>
                        @foreach ($service as $services)
                        <option value="{{ $services->id }}" > {{ $services->service_nom }} </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label for="" class="label">Fonction</label>
                    <select class="form-control mt-1" name="fonction_id">
                      <option >---------</option>
                         @foreach ($fonction as $fonctions)
                         <option value="{{ $fonctions->id }}">{{ $fonctions->fonction_nom }} </option>
                       @endforeach
                     </select>
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
