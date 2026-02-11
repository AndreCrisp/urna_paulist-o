<?php include __DIR__ . '/partials/header.php'; ?>


<div class="container_login">
    
    <h1>Urna Paulistão</h1>

    <form id="login-form" action="../controllers/login_controller.php?action=login" method="POST">
        <label for="email">
            Email:
        </label>
        <input type="email" id="email" name="email" required placeholder="Seu email">

        <label for="password"> <br>
            Senha:
        </label>
        <input type="password" id="password" name="password" required placeholder="Sua Senha"><br>

        <button class="btn" type="submit">Entrar</button>
    
    </form>

    <a href="register.php" class="btn btn-secondary">Criar Nova Conta</a>
  
</div>

<style>
    /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Fundo da página (estádio/gramado) */
body {
    min-height: 100vh;
    background: linear-gradient(
        rgba(0, 60, 0, 0.85),
        rgba(0, 40, 0, 0.85)
    ),
    url("https://images.unsplash.com/photo-1508098682722-e99c43a406b2") no-repeat center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Container principal */
.container_login {
    background: #0f3d1f;
    border: 2px solid #ffffff;
    border-radius: 12px;
    padding: 40px 35px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
    text-align: center;
}

/* Título */
.container_login h1 {
    color: #ffffff;
    margin-bottom: 25px;
    font-size: 2rem;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Labels */
.container_login label {
    display: block;
    color: #d9ffd9;
    text-align: left;
    margin-bottom: 6px;
    font-weight: bold;
}

/* Inputs */
.container_login input {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border-radius: 6px;
    border: none;
    outline: none;
    font-size: 1rem;
}

/* Placeholder */
.container_login input::placeholder {
    color: #6b6b6b;
}

/* Botões */
.btn {
    width: 100%;
    padding: 12px;
    background: #1db954; /* verde futebol */
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s ease;
    text-transform: uppercase;
}

/* Hover botão */
.btn:hover {
    background: #17a148;
    transform: scale(1.03);
}

/* Botão secundário */
.btn-secondary {
    display: inline-block;
    margin-top: 15px;
    background: transparent;
    border: 2px solid #ffffff;
    color: #ffffff;
    text-decoration: none;
    padding: 10px;
}

.btn-secondary:hover {
    background: #ffffff;
    color: #0f3d1f;
}

</style>