<?php

use Illuminate\Support\Facades\Auth;

function userFullName(){
    return Auth()->user()->prenom." ".Auth()->user()->nom;
}
?>