<?php
namespace Includes;
ini_set('error_reporting', E_ALL);
/*spl_autoload_register("myAutoLoader");
function myAutoLoader($class)
{
    $path = $_SERVER['DOCUMENT_ROOT'] . "/classes/";
    $extension = ".class.php";
    $fullPath = $path . $class . $extension;

    require_once $fullPath;
}*/
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});