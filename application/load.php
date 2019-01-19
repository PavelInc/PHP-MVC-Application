<?php
    require config."autoloader.php"; // Автозагрузка классов (не надо подключать файлы с классами. Пути берутся из констант, название файла должно соответствовать названию класса, например класс MyClass должен находиться в файле MyClass.php в директории из любой константы)
    $config = require config."config.php"; // Файл с конфигурацией
    if($config['debug']) require config."debug.php"; // Если включён дебаг, подключаем файл из /application/core/config/debug.php
    $db = new DB($config["dbconfig"]); // Работа с БД
    $router = new Router($config['routes']); // Обрабатывает ЧПУ ссылки
    $router->start(); // Запуск))
?>