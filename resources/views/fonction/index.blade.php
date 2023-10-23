@extends('indexation')
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
            <li class="breadcrumb-item active"><a href="{{route('fonction.create')}}" class="btn btn-primary">Ajouter</a></li>
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
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fonction as $fonction)
                    <tr>
                        <th scope="row">{{$fonction->id}}</th>
                        <td>{{$fonction->fonction_nom}}</td>
                        <td>
                            <div class="icon">
                                    <span><a href="{{route('fonction.edit',$fonction->id)}}" class="btn btn-success">Modifier</a></span>
                                    <span><a href="{{route('fonction.show',$fonction->id)}}" class="btn btn-primary">Voir</a></span>
                                    <span><form action="{{route('fonction.destroy',$fonction->id)}}" method="post">
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
