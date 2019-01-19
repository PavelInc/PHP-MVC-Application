<?php
    /**
     * ???
     */
    class Application {
        public static function errorCode($code) {
            http_response_code($code);
            exit("Error $code");
        }
    }
?>