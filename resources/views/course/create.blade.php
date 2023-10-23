@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Course</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Course</li>
              <li class="breadcrumb-item"><a href="{{route('course.index')}}">List</a></li>
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
          <a href="{{route('course.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
          <div class="row no-gutters">
            <div class="col-lg-4">

                </div>
            <div class="col-lg-7 px-5 pt-5">
            <!--logo-->
                <h1 class="font-weight-bold py-3">Course</h1>
               <!--endlogo-->
                  <!--form-->
                    <form action="{{route('course.store')}}" method="POST">
                        @csrf
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label class="label">Chauffeur</label>
                            <select class="form-control mt-1" name="chauffeur_id">
                              <option >---------</option>
                                  @foreach ($chauffeur as $chauffeurs)
                              <option value="{{$chauffeurs->id}}">{{$chauffeurs->chaffeur_nom}} </option>
                                  @endforeach
                            </select>
                        </div>
                        <span class="text-danger">
                          @error('chauffeur_id')
                            {{$message}}
                          @enderror
                        </span>
                        <div class="col-lg-6">
                          <label class="label">Voiture</label>
                            <select class="form-control mt-1" name="voiture_id">
                              <option>---------</option>
                                  @foreach ($voiture as $voitures)
                                    <option value="{{ $voitures->id }}">{{ $voitures->voiture_numero }}</option>
                                  @endforeach
                            </select>
                        </div>
                        <span class="text-danger">
                          @error('voiture_id')
                            {{$message}}
                          @enderror
                        </span>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label  class="label">date et heure de depart</label>
                            <input type="datetime-local" class="form-control my-3" name="course_dateheuredepart">
                        </div>
                      </div>
                      <span class="text-danger">
                        @error('course_dateheuredepart')
                          {{$message}}
                        @enderror
                    </span>
                      <div class="form-row">
                        <div class="col-lg-6">
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
