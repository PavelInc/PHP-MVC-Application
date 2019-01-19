<?php
    /**
     * Самое интересное, без комментариев :)
     */
    class Router {
        public $url, $routes, $result;
        public function __construct($routes) {
            $this->url = strtok($_SERVER["REQUEST_URI"], "?");
            $this->routes = is_array($routes) ? $routes : false;
            if(!$this->routes) {
                throw new Exception("Routes?");
            }
        }
        public function start() {
            $url = $this->url; $routes = $this->routes;
            foreach($routes as $route) {
                $route = array(
                    "regexp" => $route[0],
                    "controller" => $route[1][0],
                    "method" => $route[1][1],
                    "params" => $route[2]
                );
                if($this->result = $this->check($route)) {
                    $result = $this->result;
                    $controller = $result["controller"];
                    $method = $result["method"];
                    if(class_exists($controller)) {
                        $controller = new $controller($result["params"]);
                        if(method_exists($controller, $method)) {
                            $controller->$method();
                            return true;
                        }
                    }
                }
            }
            Application::errorCode(404);
        }
        public function check($route) {
            $url = $this->url;
            $regexp = ["#^", "$#"];
            if(!preg_match($regexp[0].$route["regexp"].$regexp[1], $url, $result)) return false;
            $params = array();
            for($i = 0; $i < count($route["params"]); $i++) {
                if(isset($result[$i+1])) {
                    $params[$route["params"][$i]] = $result[$i+1];
                }
            }
            return array(
                "url" => $url,
                "regexp" => $route["regexp"],
                "controller" => ucfirst($route["controller"])."Controller",
                "method" => $route["method"]."Action",
                "params" => $params
            );
        }
    }
?>