<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctions extends Model
{
    use HasFactory;

    public function service(){
        return $this->belongsTo(Services::class);
    }
}
