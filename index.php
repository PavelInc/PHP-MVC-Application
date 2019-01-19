<?php
    define("root", dirname(__FILE__)."/");
    define("app", root."application/");
    define("core", app."core/");
    define("config", core."config/");
    define("models", app."models/");
    define("views", app."views/");
    define("controllers", app."controllers/");
    require app."load.php";
?>