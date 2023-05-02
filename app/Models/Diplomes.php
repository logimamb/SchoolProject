<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomes extends Model
{
    use HasFactory;

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
