<?php
namespace App\Core;

class Auth {
    public static function check() {
        Session::start();
        return isset($_SESSION['usuario_id']);
    }

    public static function userId() {
        return $_SESSION['usuario_id'] ?? null;
    }

    public static function login($id) {
        Session::start();
        $_SESSION['usuario_id'] = $id;
    }

    public static function logout() {
        Session::start();
        session_destroy();
    }
}
