<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = ['chaffeur_nom', 'chauffeur_adresse'];
    public function courses()
    {
        return $this->hasMany(Course::class)->onDelete('cascade');
    }
}
