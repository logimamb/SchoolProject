<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomes extends Model
{
    use HasFactory;

    public function enseignant(){
        return $this->belongsToMany(Enseignant::class);
    }
}
