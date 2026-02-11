<?php include __DIR__ . '/partials/header.php'; ?>

<div class="container_register">

    <form id="register-form" action="../controllers/register_controller.php" method="POST">
       
    <div class="form-grup">

    <label for="">
            Usuário
        </label>
        <input type="text" name="user">

        <label for="">
            CPF
        </label>
        <input id = "cpf" type="text" name="CPF">

        <label for="">
            E-mail
        </label>
        <input type="email" name="email" id="">

        <label for="">
            Senha
        </label>
        <input type="password" name="password" id="">

        <button type="submit">Registrar</button>

    </div>
       
    </form>

   
    
</div>

<script>

    

</script>

<style>

    /* Container de registro */
.container_register {
    background: #0f3d1f;
    border: 2px solid #ffffff;
    border-radius: 12px;
    padding: 40px 35px;
    width: 100%;
    max-width: 450px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
    text-align: center; 
    margin: 0 auto;
}

/* Grupo do formulário */
.form-grup {
    width: 100%;
}

/* Labels */
.container_register label {
    display: block;
    color: #d9ffd9;
    text-align: left;
    margin-bottom: 6px;
    font-weight: bold;
}

/* Inputs */
.container_register input {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border-radius: 6px;
    border: none;
    outline: none;
    font-size: 1rem;
}

/* Placeholder */
.container_register input::placeholder {
    color: #6b6b6b;
}

/* Botão de registro */
.container_register button {
    width: 100%;
    padding: 12px;
    background: #1db954;
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s ease;
    text-transform: uppercase;
}

/* Hover do botão */
.container_register button:hover {
    background: #17a148;
    transform: scale(1.03);
}

</style>