<?php

use Illuminate\Support\Facades\Auth;

function userFullName(){
    return Auth()->user()->prenom." ".Auth()->user()->nom;
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