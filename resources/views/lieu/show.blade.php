@extends('show')
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
            <li class="breadcrumb-item active">Chauffeur</li>
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
        <a href="{{route('login.dashboard')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
        <!--table-->
        <h3>Detail Lieu</h3>
        <table style="border: 0px;">
            <tr>
                <td>
                    <p><b class="lbl">ID :</b>{{$lieu->id}}</p>
                    <p><b class="lbl">Nom :</b>{{$lieu->lieu_nom}}</p>
                </td>
            </tr>
        </table>
         <!--Endtable-->
    </div>
    <!-- /.row (main row) -->
@endsection
