<?php
namespace App\Controllers;

use App\Models\User;

class Eszkozkezelo extends User{

public function __construct(){

    if(($_COOKIE["acceptedlaw"]==true) and ($_SERVER["loggedin"]=true) ){

    }


}
}