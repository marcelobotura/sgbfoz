<?php
// Autoload manual básico
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/../';

    // Converte namespaces em caminhos
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
