<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCourse extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','responsable_id','date','lieu','motif','dateheurearriver'];

    public function course(){
        return $this->belongsTo(  Course::class);
    }
    public function responsable(){
        return $this->belongsTo(  Responsable::class);
    }
    public function lieu(){
        return $this->hasOne(  Lieu::class);
    }
}
