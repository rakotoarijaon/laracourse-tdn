@extends('show')
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
            <li class="breadcrumb-item active">Voir</li>
          </ol>
        </div><
      </div>
    </div>
  </div>
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
        <a href="{{route('fonction.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Detail Fonction</h3>
        <table style="border: 0px;">
            <tr>
                <td>
                    <p><b class="lbl">ID :</b>{{$fonction->id}}</p>
                    <p><b class="lbl">Nom :</b>{{$fonction->fonction_nom}}</p>
                </td>
            </tr>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection
