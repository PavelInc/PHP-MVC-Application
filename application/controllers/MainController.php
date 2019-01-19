<?php
    /**
     * Контроллёр, обязательно писать extends Controller
     * Все функции, к которым есть доступ у пользователя должны заканчиваться на Action: indexAction, showAction, addAction
     */
    class MainController extends Controller {
        public function indexAction() {
            $page = new Page; // Страница
            $page->title = "A!"; // Заголовок для страницы (<title>A!</title>)
            $data = array( // Для шаблона. "hello" будет доступна как $hello в шаблоне
                "hello" => "Hello World"
            );
            $template = View::template("main/index", $data);
            // main/index - путь к шаблону (/application/views/templates/main/index.php)
            View::render($page, $template); // Отобразить шаблон в лейауте default.php (/application/views/layouts/default.php). Шаблон - переменная $content в лейауте
        }
    }
?>