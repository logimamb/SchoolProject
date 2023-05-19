<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

function userFullName(){
    return Auth()->user()->prenom." ".Auth()->user()->nom;
}

function contains($contenair,$contenu){
    return Str::contains($contenair,$contenu);
}

function setMenuClass($route,$classe){
    $routeActuelle = request()->route()->getName();
    if(contains($routeActuelle,$route)){
        return $classe;
    }else{
        return "";
    }
}

function setMenuActive($route){
    $routeActuelle = request()->route()->getName();
    if($routeActuelle === $route){
        return "active";
    }else{
        return "";
    }
}

 function getRolesName(){
     $RoleName = " ";
     $i = 0;
     foreach(Auth()->user()->roles as $roles){
         $RoleName .= $roles->nom;
         if($i < sizeof(Auth()->user()->roles)-1){
             $RoleName .= ", ";
         }
         $i++;
     }
     return $RoleName;
}

?>