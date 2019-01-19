<?php
    class MainController extends Controller {
        public function indexAction() {
            $page = new Page;
            $page->title = "A!";
            $data = array(
                "hello" => "Hello World"
            );
            $template = View::template("main/index", $data);
            View::render($page, $template);
        }
    }
?>