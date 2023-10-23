@extends('indexation')
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
            <li class="breadcrumb-item active"><a href="{{route('responsable.create')}}" class="btn btn-primary">Ajouter</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    @if (Session::get('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
       <div>
        {{Session::get('success')}}
       </div>
     </div>
   @endif
    <div class="row">
        <a href="{{route('login.dashboard')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th >Responsable_matricule</th>
                    <th >Responsable_nom</th>
                    <th >Responsable_prenom</th>
                    <th >Service</th>
                    <th >Fonction</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($responsable as $responsable)
                    <tr>
                        <th scope="row">{{$responsable->id}}</th>
                        <td>{{$responsable->responsable_matricule}}</td>
                        <td>{{$responsable->responsable_nom}}</td>
                        <td>{{$responsable->responsable_prenom}}</td>
                        <td>{{$responsable->service->service_nom}}</td>
                        <td>{{$responsable->fonction->fonction_nom}}</td>
                        <td>
                            <div class="icon">
                                    <span><a href="{{route('responsable.edit',$responsable->id)}}" class="btn btn-success">Modifier</a></span>
                                    <span><a href="{{route('responsable.show',$responsable->id)}}" class="btn btn-primary">Voir</a></span>
                                    <span>                    <form action="{{route('responsable.destroy',$responsable->id)}}" method="post">
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

