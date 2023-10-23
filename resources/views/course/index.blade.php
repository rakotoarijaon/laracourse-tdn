@extends('indexation')
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
            <li class="breadcrumb-item active"><a href="{{route('course.create')}}" class="btn btn-primary">Ajout Course</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
      @if (Session::get('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
              {{Session::get('success')}}
          </div>
        </div>
      @endif
    <!-- Main row -->
    <div class="row">
        <a href="{{route('login.dashboard')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Chauffeur</th>
                    <th>voiture</th>
                    <th>Date et heure de depart</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($course as $course)
                    <tr>
                        <th scope="row">{{$course->id}}</th>
                        <td>{{$course->chauffeur->chaffeur_nom}}</td>
                        <td>{{$course->voiture->voiture_numero}}</td>
                        <td>{{$course->course_dateheuredepart}}</td>
                        <td>
                            <div class="icon">
                                <span><a href="{{route('detail.show',$course->id)}}" class="btn btn-primary">Ajouter des details</a></span>
                                <span><a href="{{route('course.edit',$course->id)}}" class="btn btn-success">Modifier</a></span>
                                <span><form action="{{route('course.destroy',$course->id)}}" method="post">
                                  @csrf
                                   @method('DELETE')
                                  <button class="btn btn-danger">Supprimer</button>
                              </form>
                              </span>
                            </div>
                        </td>
                    </tr>
                 @endforeach
            <tbody>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection
