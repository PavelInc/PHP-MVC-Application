<?php
    spl_autoload_register(function($className) {
        $constants = get_defined_constants(true);
        $paths = $constants['user'];
        foreach($paths as $key => $val) {
            $file = $val.$className.".php";
            if(file_exists($file)) include $file;
        }
    });
?>