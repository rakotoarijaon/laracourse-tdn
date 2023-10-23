<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service_nom'];
    public function course(){
        return $this->hasMany(  course::class);
    }
   public function responsable(){
    return $this->hasOne( responsable::class);
   }
}
