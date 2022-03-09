<?php
require __DIR__ . '/../vendor/autoload.php';
//use PDO;

 class Database
{   
    private $_PDO;

   
    public function __construct()
    {
        $host = getenv('HOST');
        $db   = getenv('DATABASE');
        $port = getenv('PORT');
        $_ENV['username'] = getenv('USERNAME');
        $_ENV['password'] = getenv('PASSWORD');
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        $this->set_PDO(new PDO($dsn, $_ENV['username'], $_ENV['password']));
        $this->set_PDO($this->get_PDO()->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC));
        $this->set_PDO($this->get_PDO()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    }
    
    /**
     * Get the value of _PDO
     */ 
    public function get_PDO()
    {
        return $this->_PDO;
    }

    /**
     * Set the value of _PDO
     *
     * @return  self
     */ 
    public function set_PDO($_PDO)
    {
        $this->_PDO = $_PDO;

    }
}
