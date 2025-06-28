<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuario;
use App\Core\Session;

class AuthController extends Controller {
    // Método para renderizar a página de login
    public function login() {
        $this->view('auth/login');
    }

    // Método para validar as credenciais do usuário
    public function loginPost() {
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        // Buscar o usuário pelo e-mail
        $usuario = (new Usuario())->buscarPorEmail($email);

        // Verificar se o usuário existe e se a senha está correta
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            // Salvar as informações do usuário na sessão
            Session::set('usuario', $usuario);
            header('Location: /');
            exit;
        }

        // Caso as credenciais sejam inválidas
        $_SESSION['erro'] = 'E-mail ou senha inválidos';
        header('Location: /login');
        exit;
    }

    // Método para fazer logout do usuário
    public function logout() {
        Session::destroy(); // Destroi a sessão do usuário
        header('Location: /login'); // Redireciona para a página de login
        exit;
    }
}
