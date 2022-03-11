<?php


require __DIR__.'/../../vendor/autoload.php';


class EszkozkezeloController extends User{

    public function __construct(){

        if(($_COOKIE["acceptedlaw"]==true) and ($_SERVER["loggedin"]=true) ){

        }
        
    }
}