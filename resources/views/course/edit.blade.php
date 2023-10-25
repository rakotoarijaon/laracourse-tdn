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
            <li class="breadcrumb-item active">Modif</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
<!--form-->
<div class="container">
    <a href="{{route('course.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h1 class="card-title">Modifier cette Course</h1>
                </div>
                <form role="form" action="{{route('course.update',$course->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <label for="champ1">Chauffeur</label>
                                      <select class="form-select" aria-label="Default select example" name="chauffeur_id">
                                        <option >{{$course->chauffeur->chaffeur_nom}}</option>
                                        @foreach ($chauffeur as $chauffeurs)
                                      <option value="{{$chauffeurs->id}}" >{{$chauffeurs->chaffeur_nom}} </option>
                                        @endforeach
                                      </select>
                                      <span class="text-danger">
                                        @error('chauffeur_id')
                                          {{$message}}
                                        @enderror
                                      </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <label for="champ2">Voiture</label>
                                    <select select class="form-select" aria-label="Default select example" name="voiture_id">
                                        <option>{{$course->voiture->voiture_numero}}</option>
                                            @foreach ($voiture as $voitures)
                                                <option value="{{ $voitures->id }}" >{{ $voitures->voiture_numero }} </option>
                                            @endforeach
                                      </select>
                                      <span class="text-danger">
                                        @error('voiture_id')
                                          {{$message}}
                                        @enderror
                                      </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <label for="champ3">Date et Heure de depart</label>
                                    <input type="datetime-local" class="form-control" id="champ3" name="course_dateheuredepart" value="{{$course->course_dateheuredepart}}">
                                    <span class="text-danger">
                                        @error('course_dateheuredepart')
                                          {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

