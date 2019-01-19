<?php
    require config."autoloader.php";
    $config = require config."config.php";
    if($config['debug']) require config."debug.php";
    $router = new Router($config['routes']);
    $router->start();
    $db = new DB($config["dbconfig"]);
?>