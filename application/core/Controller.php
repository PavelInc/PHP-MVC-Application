<?php
    /**
     * Базовый класс контроллёра, принимает на вход параметры
     */
    class Controller {
        public $params = array();
        public function __construct($params) {
            $this->params = $params;
        }
    }
?>