<?php
namespace App\Controllers;

use App\Models\User;

interface login{
 function loginUser();
 function logoutUser();
}

class loginSystemController extends User implements login{


public function __construct($username,$password)
{
    $this->__construct($username,$password);

    
} 

public function loginUser(){

}
public function logoutUser(){

}


}