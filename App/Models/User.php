<?php

require __DIR__.'/../../vendor/autoload.php';


class User extends Database
{
    
    private  $username;
    private  $password;

    public function __construct($name, $password)
    {
        $this->setUsername($name);
        $this->setPassword($password);
    }
   
    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function login(){
    
        $pdo = $this->get_PDO();
    
    }
    public function logout(){
        unset($_SESSION);
        session_regenerate_id();
    }
}
//