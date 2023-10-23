<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;
    protected $fillable = ['responsable_matricule','responsable_nom','responsable_prenom','service_id','fonction_id'];
    public function service(){
        return $this->belongsTo( Service::class);
    }
    public function fonction(){
        return $this->belongsTo( Fonction::class);
    }
    public function detailcourse(){
        return $this->hasone(  DetailCourse::class);
    }
}
