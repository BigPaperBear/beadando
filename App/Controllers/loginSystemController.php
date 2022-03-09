<?php

require __DIR__.'/../../vendor/autoload.php';

interface login{
 function loginUser();
 function logoutUser();
}

class loginSystemController extends User implements login{


public function __construct($username,$password)
{
    parent::__construct($username,$password);

    
} 

public function loginUser(){

}
public function logoutUser(){

}


}