<?php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data); // <- isso torna $titulo acessível
        $viewPath = BASE_PATH . '/app/views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View não encontrada: $viewPath";
        }
    }
}
