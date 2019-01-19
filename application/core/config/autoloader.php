<?php
    /** 
     * Отвечает за автоматическое подключение файлов с классами.
    */
    spl_autoload_register(function($className) {
        $constants = get_defined_constants(true); // Получает все константы (define)
        $paths = $constants['user']; // Пользовательские константы
        foreach($paths as $key => $val) {
            $file = $val.$className.".php";
            if(file_exists($file)) include $file; // Подключаем класс
        }
    });
?>