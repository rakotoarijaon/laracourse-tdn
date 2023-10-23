
@extends('show')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Chauffeur
            </h1>
              </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Chauffeur</li>
              <li class="breadcrumb-item"><a href="{{route('chauffeur.index')}}">List</a></li>
            <li class="breadcrumb-item active">Voir</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
    <!-- Main row -->
    
    <div class="row">
        <a href="{{route('chauffeur.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Detail Chauffeur</h3>
        <table style="border: 0px;">
            <tr>
                <td>
                    <p><b class="lbl">ID :</b>{{$chauffeur->id}}</p>
                    <p><b class="lbl">Nom :</b>{{$chauffeur->chaffeur_nom}}</p>
                    <p><b class="lbl">Adresse :</b>{{$chauffeur->chauffeur_adresse}}</p>
                </td>
            </tr>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection
