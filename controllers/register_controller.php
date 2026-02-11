<?php

// Inclui o arquivo do Model User
// Require_once garante que o arquivo sera incluido apenas uma vez
require_once '../model/User.php';

// Defina a classe AuthController
// Essa classe é responsavel pelas ações de autenticação (registro, lo)
class AuthController {

    // Método responsavel por registrar um novo usuario
    public function register() {

        
        // Recebe o nome do Usuário
        $user = $_POST['user'];


        // Recebe o CPF e tira os espaços em branco do inicio e do fim
        $CPF = trim($_POST['CPF']);

        // Receba o email e remove espaços em branco do inicio e do fim
        $email = trim($_POST['email']);
        

        // Receba a senha digitada e remove pelo usuario
        // (Normalmente sera cristografada dentro do Model)
        $password = $_POST['password'];
       

        // Cria uma instancia do Model User
        // O Controller nunca acessa o banco diretamente
        $userModel = new User();

        // Verifica se ja existe um usuario com o mesmo email
        if ($userModel->findbyEmail($email)) {

            // Redirecionna de volta para o formulario de registro
            // Passando um parametro de erro na URL
            header("Location: ../views/register.php?erro=email_used");

            // Encerra a execução do script
            exit;
        }

       // Cria o usuario no banco de dados
       // Esse metodo deve retornar true ou false
       $created = $userModel->create(
           $user,
           $email,
           $password,
           $CPF,
       );

       // Verifica se o usuario foi criado com successo
       if ($created) {

           // Redireciona para a tela de login
           // Indicando que o cadastro foi realizado com sucesso
           header("Location: ../views/login.php?success=registered");

           // Encerra o script
           exit;
       }

       // Caso algo de errado (opcional)
       // Header("Location: ../views/register.php?error=unknown");
    }
}

// Cria uma instancia do controller de autenticação
$auth = new AuthController();

// Chama o metodo de registro
// Esse arquivo normalmente e acionado pelo action do formulario
$auth->register();


?>