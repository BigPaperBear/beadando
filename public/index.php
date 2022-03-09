<?php

require __DIR__.'/../vendor/autoload.php';
/**
 * @author Szabó Zoltán Tamás <zoli.szabok@gmail.com>
 * @copyright 2022 
 * @version 0.0.1
 * 
 */

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
echo '<pre>';
$testcomposer = new loginSystemController('test','test');
var_dump($testcomposer);
echo '</pre>';
?>
<h1>if work everything fine not showing up any error</h1>
</body>

</html>