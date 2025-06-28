<?php
namespace App\Core;

class App {
    public function __construct() {
        $url = $_GET['url'] ?? '/';
        $routes = include BASE_PATH . '/app/config/routes.php';

        if (array_key_exists($url, $routes)) {
            [$controllerName, $method] = explode('@', $routes[$url]);
            $controllerClass = 'App\\Controllers\\' . $controllerName;
            if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
                $controller = new $controllerClass();
                $controller->$method();
                return;
            }
        }

        // Rota não encontrada
        http_response_code(404);
        echo "Página não encontrada";
    }
}
