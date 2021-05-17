<?php


 function hasRole($role){
     return auth()->user()->privileges->contains('name',$role);
}

function isAdministrator(){

    return hasRole('Administrator');
}

function isEditor(){

    return hasRole('Editor');

}

