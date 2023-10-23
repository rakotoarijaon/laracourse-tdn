<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;
    protected $fillable = ['lieu_nom'];
    public function course(){
        return $this->hasMany( course::class);
    }
    public function detailcourse(){
        return $this->belongsTo(  detailcourse::class);
    }
}
