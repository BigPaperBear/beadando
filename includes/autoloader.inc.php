<?php
ini_set('error_reporting', E_ALL);
spl_autoload_register("myAutoLoader");
 function myAutoLoader($class) {
     $path =$_SERVER['DOCUMENT_ROOT']."/classes/";
     $extension = ".class.php";
     $fullPath = $path . $class . $extension;
    
    require_once $fullPath;
	
 }

 
