<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['chauffeur_id','voiture_id','service_id','lieu','course_dateheuredepart'];
    public function voiture(){
        return $this->belongsTo(  Voiture::class);
    }
    public function chauffeur(){
        return $this->belongsTo(  Chauffeur::class);
    }
    public function Lieu(){
        return $this->belongsTo(  Lieu::class);
    }
    public function service(){
        return $this->belongsTo( Service::class);
    }
    public function detailcourse(){
        return $this->hasMany(  DetailCourse::class);
    }
}
