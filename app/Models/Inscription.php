<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    public function dossiers(){
        return $this->hasMany(DossierEtudiants::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
