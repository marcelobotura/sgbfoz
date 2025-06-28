<?php
namespace App\Core;

class ErrorHandler {
    public static function handle($e) {
        echo "Erro: " . $e->getMessage();
    }
}
