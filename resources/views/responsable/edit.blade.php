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
            <li class="breadcrumb-item active">Modif</li>
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
          <a href="{{route('responsable.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Responsable</h1>
            <!--endlogo-->
            <!--form-->
              <form action="{{route('responsable.update',$responsable->id)}}"  method="POST">
                  @csrf
                   @method('PATCH')
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Responsable matricule</label>
                    <input type="text"  placeholder="++++" class="form-control my-3  " name="responsable_matricule" value="{{$responsable->responsable_matricule}}">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label">Responsable Nom</label>
                    <input type="text"  placeholder="Responsable name" name="responsable_nom" class="form-control" value="{{$responsable->responsable_nom}}" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label  class="label"> Responsable Prenom</label>
                    <input type="text"  placeholder="Responsable username" name="responsable_prenom" class="form-control" value="{{$responsable->responsable_prenom}}">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-7">
                    <label for="" class="label">service</label>
                    <select class="form-control mt-1" name="service_id">
                      <option>---------</option>
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
                         <option value="{{ $fonctions->id }}" > {{ $fonctions->fonction_nom }} </option>
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

