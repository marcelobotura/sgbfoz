<?php
namespace App\Core;

class View {
    public static function render($view, $data = []) {
        extract($data);
        require BASE_PATH . "/app/views/{$view}.php";
    }
}
