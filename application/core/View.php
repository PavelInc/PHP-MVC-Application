<?php
    class View {
        public static function template($name, $data) {
            $file = templates.$name.".php";
            if(!file_exists($file)) throw new Exception("$file doesn't exist!");
            if(is_array($data)) extract($data);
            @ob_start();
            include $file;
            $result = @ob_get_clean();
            return $result;
        }
        public static function render($page, $template, $layout = "default") {
            $file = layouts.$layout.".php";
            if(!file_exists($file)) throw new Exception("$file doesn't exist!");
            $content = $template;
            include $file;
        }
    }
?>