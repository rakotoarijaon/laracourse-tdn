@extends('creation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Service</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Service</li>
              <li class="breadcrumb-item"><a href="{{route('service.index')}}">List</a></li>
            <li class="breadcrumb-item active">Ajout</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
<!--form-->
<div class="container">
    <a href="{{route('service.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h1 class="card-title">Ajouter une Service</h1>
                </div>
                <form role="form" action="{{route('service.store')}}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <label for="champ5">Nom du Service</label>
                                    <input type="text" class="form-control" id="champ5"  name="service_nom" placeholder="Nom de Votre Service">
                                      <span class="text-danger">
                                        @error('service_nom')
                                          {{$message}}
                                        @enderror
                                      </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--endform-->
@endsection

