@extends('indexation')
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
            <li class="breadcrumb-item active"><a href="{{route('lieu.create')}}" class="btn btn-primary">Ajouter</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
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
                    <th scope="col">ID</th>
                    <th scope="col">Nom du lieu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lieu as $lieus)
                    <tr>
                        <th scope="row">{{$lieus->id}}</th>
                        <td>{{$lieus->lieu_nom}}</td>
                        <td>
                            <div class="icon">
                                    <span><a href="{{route('lieu.edit',$lieus->id)}}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a></span>
                                    <span><a href="{{route('lieu.show',$lieus->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></span>
                                    <span><form action="{{route('lieu.destroy',$lieus->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
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
