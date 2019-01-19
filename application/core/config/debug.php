<?php
    /**
     * Дебаг (отладка). Включает отображение всех ошибок и варнингов, добавляет функцию debug($var) для отладки переменной
     */ 
    ini_set("display_errors", true);
    error_reporting(E_ALL);
    function debug($var) {
        echo "<pre>";
        var_dump($var);
        exit;
    }
?>