<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    public function semestres(){
        return $this->belongsToMany(Semestre::class);
    }

    public function filieres(){
        return $this->belongsToMany(Filieres::class);
    }

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }

    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
