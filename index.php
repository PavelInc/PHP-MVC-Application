<?php
    #region Пути к папкам (константы)
    define("root", dirname(__FILE__)."/");
    define("app", root."application/");
    define("core", app."core/");
    define("config", core."config/");
    define("models", app."models/");
    define("views", app."views/");
    define("controllers", app."controllers/");
    define("layouts", views."layouts/");
    define("templates", views."templates/");
    #endregion
    require app."load.php"; // По названию понятно. /application/load.php
?>