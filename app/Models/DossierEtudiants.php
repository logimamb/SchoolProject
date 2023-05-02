<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierEtudiants extends Model
{
    use HasFactory;

    public function inscription(){
        return $this->belongsTo(Inscription::class);
    }
}
