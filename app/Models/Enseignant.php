<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    public function diplomes(){
        return $this->belongsToMany(Diplomes::class);
    }

    public function matieres(){
        return $this->belongsToMany(Matiere::class);
    }

    public function filieres(){
        return $this->belongsToMany(Filieres::class);
    }

    public function semestres(){
        return $this->belongsToMany(Semestre::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }
}
