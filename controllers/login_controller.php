<?php

session_start();

require_once '../model/User.php';

class LoginController
{
    public function login()
    {
        // Apenas POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
            header("Location: ../views/login.php?error=invalid_method");
            exit;
        }

        // Dados do formulário
        $email = trim($_POST['email'] ?? '');
        $password = $_POST ['password'] ?? '';

        // Validação básica

        if (empty($email) || empty($password)) {
            header("Location: ../views/login.php?error=empty_fields");
            exit;
        }

        $userModel = new User ();
        $user = $userModel->findByEmail($email);

        // Usuário não encontrado

        if (!$user) {
            header ("Location: ../views/login.php?error=invalid_credential");
            exit;
        }

        // Senha inválida
        if (!password_verify($password, $user['password'])) {
            header("Location: ../views/login.php?error=invalid_credential");
            exit;
        }

        // Login OK -> cria sessão
        $_SESSION['user'] = [
            'id'        => $user['id'],
            'email'     => $user['email'],
            'user'  => $user['user']
        ];

        // Redireciona para o perfil
        header("Location: ../views/votacao.php");
        exit;

    }
}

// Roteamento simples
$action = $_GET['action'] ?? null;
$controller = new LoginController();

if ($action === 'login') {
    $controller->login();
}

?>