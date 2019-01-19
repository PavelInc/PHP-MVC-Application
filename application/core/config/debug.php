<?php
    ini_set("display_errors", true);
    error_reporting(E_ALL);
    function debug($var) {
        echo "<pre>";
        var_dump($var);
        exit;
    }
?>