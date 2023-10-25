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
   <!---->
   <!--form-->
   <div class="container">
    <div class="row">
        <div class="col-md-7 offset-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ajout details</h3>
                </div>
                <form role="form" action="{{route('detail.store')}}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="champ1">Course</label>
                                    <input type="text" class="form-control" id="champ2" name="course_id" value="{{$course->id}}" aria-label="Disabled input example" disabled>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="champ2">Lieu</label>
                                    <input type="text" class="form-control" id="champ2" placeholder="Lieu" name="lieu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="champ3">Responsable</label>
                                    <select class="form-select" aria-label="Default select example" name="responsable_id">
                                        <option selected>Choisir</option>
                                        @foreach ($responsable as $responsables)
                                              <option value="{{$responsables->id}}">{{$responsables->responsable_prenom}}</option>
                                          @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="champ4">Motif</label>
                                    <input type="text" class="form-control" id="champ4" placeholder="motif" name="motif">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="champ5">Date et Heure </label>
                                    <input type="datetime-local" class="form-control" id="champ5" placeholder="date et heure" name="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="champ6">Date et Heure d'arriver</label>
                                    <input type="datetime-local" class="form-control" id="champ6" placeholder="Votre arriver" name="dateheurearriver">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Valider</button>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!--end form-->
<!--Titre-->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Details</h3>
        </div>
    </div>
<!--endTitre-->
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

