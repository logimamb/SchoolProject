<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function fonctions(){
        return $this->hasMany(Fonctions::class);
    }
}
