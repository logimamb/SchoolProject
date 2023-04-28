<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteurs extends Model
{
    use HasFactory;

    public function etudiants(){
        return $this->hasMany(Etudiants::class);
    }
}
