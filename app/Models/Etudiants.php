<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    public function filieres(){
        return $this->belongsToMany(Filieres::class);
    }

    public function niveaux(){
        return $this->belongsToMany(Niveau::class);
    }

    /*public function frais(){
        return $this->belongsToMany(Frais::class);
    }*/

    public function recus(){
        return $this->hasMany(Recu::class);
    }

    public function inscription(){
        return $this->belongsTo(User::class);
    }

    public function tuteur(){
        return $this->belongsTo(Tuteurs::class);
    }

    public function scolarite(){
        return $this->belongsTo(Scolarite::class);
    }

    public function frais(){
        return $this->hasMany(Frais::class);
    }

    public function parcours(){
        return $this->belongsToMany(Parcours::class);
    }

}
