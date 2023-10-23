@extends('show')
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
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('body')
    <!-- Main row -->
    <div class="row">
        <!--table-->
        <h3>Detail Course</h3>
        <table style="border: 0px;">
            <tr>
                <td>
                  <p><b class="lbl">Detail ID : </b>{{$detail->id}}</p>
                    <p><b class="lbl">Course ID :</b>{{$detail->course->id}}</p>
                    <p><b class="lbl">Chauffeur :</b>{{$detail->course->chauffeur->chaffeur_nom}}</p>
                    <p><b class="lbl">Voiture :</b>{{$detail->course->voiture->voiture_numero}}</p>
                    <p><b class="lbl">Responsable :</b>{{$detail->responsable->responsable_prenom}}({{$detail->responsable->responsable_matricule}})</p>
                    <p><b class="lbl">Date et heure</b>{{$detail->date}}</p>
                    <p><b class="lbl">Lieu :</b>{{$detail->lieu}}</p>
                    <p><b class="lbl">Motif :</b>{{$detail->motif}}</p>
                    <p><b class="lbl">Date et heure d'arriver' :</b>{{$detail->dateheurearriver}}</p>
                </td>
            </tr>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection


