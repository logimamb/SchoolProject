<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    public function niveaux(){
        return $this->belongsTo(Niveau::class);
    }

    public function matieres(){
        return $this->belongsToMany(Matiere::class);
    }

    public function filieres(){
        return $this->belongsToMany(Filieres::class);
    }

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }
}
