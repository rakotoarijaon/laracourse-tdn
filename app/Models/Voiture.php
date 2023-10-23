<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['voiture_numero', 'voiture_type'];
    public function courses()
    {
        return $this->hasMany(Course::class)->onDelete('cascade');
    }
}
