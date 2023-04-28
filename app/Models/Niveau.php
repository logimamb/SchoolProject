<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    public function filieres(){
        return $this->belongsToMany(Filieres::class);
    }

    public function etudiants(){
        return $this->belongsToMany(Etudiants::class);
    }

    public function semestres(){
        return $this->hasMany(Semestre::class);
    }
}
