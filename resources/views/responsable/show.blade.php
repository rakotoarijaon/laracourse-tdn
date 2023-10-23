@extends('show')
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
            <li class="breadcrumb-item active">Voir</li>
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
        <a href="{{route('responsable.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Detail Responsable</h3>
        <table style="border: 0px;">
            <tr>
                <td>
                    <p><b class="lbl">ID :</b>{{$responsable->id}}</p>
                    <p><b class="lbl">Matricule :</b>{{$responsable->responsable_matricule}}</p>
                    <p><b class="lbl">Nom :</b>{{$responsable->responsable_nom}}</p>
                    <p><b class="lbl">Prenom :</b>{{$responsable->responsable_prenom}}</p>
                    <p><b class="lbl">Service :</b>{{$responsable->service->service_nom}}</p>
                    <p><b class="lbl">Fonction :</b>{{$responsable->fonction->fonction_nom}}</p>
                </td>
            </tr>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection

