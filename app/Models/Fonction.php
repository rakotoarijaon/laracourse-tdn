<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    use HasFactory;
    protected $fillable = ['fonction_nom'];
    public function responsable(){
        return $this->hasOne( responsable::class);
    }
}
