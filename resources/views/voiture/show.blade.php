@extends('show')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Voiture</h1>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Voiture</li>
              <li class="breadcrumb-item"><a href="{{route('voiture.index')}}">List</a></li>
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
        <a href="{{route('voiture.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Detail Voiture</h3>
          <table style="border: 0px;">
              <tr>
                  <td>
                      <p><b class="lbl">ID :</b>{{$voiture->id}}</p>
                      <p><b class="lbl">Numero :</b>{{$voiture->voiture_numero}}</p>
                      <p><b class="lbl">Type :</b>{{$voiture->voiture_type}}</p>
                  </td>
              </tr>
          </table>
         <!--Endtable-->
    </div>
<!-- /.row (main row) -->
@endsection
