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
<!--form-->
<div class="container">
    <a href="{{route('responsable.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <div class="row">
            <div class="col-md-7 offset-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Modifier cette Responsable</h3>
                    </div>
                    <form role="form" action="{{route('responsable.update',$responsable->id)}}"  method="POST">
                        @csrf
                        @method('PATCH')
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label for="champ1">Numero Matricule</label>
                                        <input type="text" class="form-control" id="champ2" name="responsable_matricule" placeholder="Numero Matricule" value="{{$responsable->responsable_matricule}}">
                                        <span class="text-danger">
                                            @error('responsable_matricule')
                                              {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="champ2">Nom </label>
                                        <input type="text" class="form-control" id="champ2" placeholder="Votre nom" name="responsable_nom" value="{{$responsable->responsable_nom}}">
                                        <span class="text-danger">
                                            @error('responsable_nom')
                                              {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="champ2">Prenom </label>
                                        <input type="text" class="form-control" id="champ2" placeholder="Votre prénom(s)" name="responsable_prenom" value="{{$responsable->responsable_prenom}}">
                                        <span class="text-danger">
                                            @error('responsable_prenom')
                                              {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="champ1">Service</label>
                                        <select class="form-select" aria-label="Default select example" name="service_id" >
                                          <option selected  >Choisir à nouveau</option>
                                          @foreach ($service as $services)
                                              <option value="{{ $services->id }}" > {{ $services->service_nom }} </option>
                                           @endforeach
                                        </select>
                                        <span class="text-danger">
                                          @error('service_id')
                                            {{$message}}
                                          @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="champ1">Fonction</label>
                                        <select class="form-select" aria-label="Default select example" name="fonction_id" >
                                          <option selected class="disabled">Choisir à nouveau</option>
                                            @foreach ($fonction as $fonctions)
                                                <option value="{{ $fonctions->id }}">{{ $fonctions->fonction_nom }} </option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                          @error('fonction_id')
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
    <!--end form-->
@endsection

