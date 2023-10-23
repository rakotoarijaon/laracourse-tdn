@extends('indexation')
@extends('main-layout')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="{{route('course.index')}}"><i class="fa-solid fa-arrow-left fa-2x icons"></i></a>
            </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('login.dashboard')}}">Acceuil</a></li>
                <li class="breadcrumb-item active">Course</li>
              <li class="breadcrumb-item"><a href="{{route('course.index')}}">List</a></li>
            <li class="breadcrumb-item active">Details</li>
          </ol>
        </div>
      </div>
    </div>
</div>
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
   <hr>
   <h1 >Ajout detail</h1>
<div class="row">
  <form action="{{route('detail.store')}}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-2">
            <label>Course</label>
              <select class="form-control" name="course_id" >
                <option value="{{$course->id}}"> {{$course->id}}</option>
              </select>
        </div>
        <div class="form-group col-md-2">
            <label >Lieu</label>
              <input type="text"  placeholder="Lieu" name="lieu" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputState">Responsable</label>
              <select class="form-control mt-1" name="responsable_id">
                <option>---------</option>
                  @foreach ($responsable as $responsables)
                      <option value="{{$responsables->id}}">{{$responsables->responsable_prenom}}</option>
                  @endforeach
            </select>
        </div>
        <div class="form-group col-md-2">
            <label>Motif</label>
              <input type="text"  placeholder="motif" name="motif" class="form-control">
        </div>
    </div>
    <div class="form row">
        <div class="form-group col-md-2">
            <label >Date et heure</label>
              <input type="datetime-local"  placeholder="date et heure" name="date" class="form-control">
        </div>
        <div class="form-group col-md-2">
            <label>Date arriver</label>
            <input type="datetime-local"  placeholder="Votre arriver" name="dateheurearriver" class="form-control">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>
<hr>
<div class="row">
  <h1>Course Detail</h1>
</div>
<div class="row">
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>course</th>
            <th>voiture</th>
            <th>chauffeur</th>
            <th>Responsable</th>
            <th>Date et heure </th>
            <th>Lieu</th>
            <th>Motif</th>
            <th>Date et heure d'arriver</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($detail as $details)
            <tr>
                <th scope="row">{{$details->course_id}}</th>
                <td>{{$details->course->voiture->voiture_numero}}</td>
                <td>{{$details->course->chauffeur->chaffeur_nom}}</td>
                <td>{{$details->responsable->responsable_prenom}} ({{$details->responsable->responsable_matricule}})</td>
                <td>{{$details->date}}</td>
                <td>{{$details->lieu}}</td>
                <td>{{$details->motif}}</td>
                <td>{{$details->dateheurearriver}}</td>
                <td>
                  <div class="icon">
                        <span><a href="{{route('course.show',$details->id)}}" class="btn btn-primary">Voir</a></span>
                        <span>
                          <form action="{{route('detail.destroy',$details->id)}}" method="post">
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
</div>
@endsection

