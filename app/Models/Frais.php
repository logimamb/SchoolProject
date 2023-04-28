<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    use HasFactory;

    public function etudiants(){
        return $this->belongsToMany(Etudiants::class);
    }

    public function agent(){
        return $this->belongsTo(User::class);
    }
}
