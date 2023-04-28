<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Recu extends Model
{
    use HasFactory;

    public function agent(){
        return $this->belongsTo(User::class);
    }

    public function etudiants(){
        return $this->belongsTo(Etudiants::class);
    }
}
