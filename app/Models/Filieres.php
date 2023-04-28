<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filieres extends Model
{
    use HasFactory;

    public function etudiants(){
        return $this->belongsToMany(Etudiants::class);
    }

    public function niveaux(){
        return $this->belongsToMany(Niveau::class);
    }

    public function semestres(){
        return $this->belongsToMany(Semestre::class);
    }

    public function matieres(){
        return $this->belongsToMany(Matiere::class);
    }

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }

    public function option(){
        return $this->belongsTo(Options::class);
    }
}
