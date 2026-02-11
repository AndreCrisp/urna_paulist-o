<?php 
 
include __DIR__ . '/../model/User.php'; 
include __DIR__ . '/partials/header.php';

?>

<div class="container_votacao">
    
    <form id="form-voto" action="../controllers/voto_controller.php?action=login" method="POST">

    <select name="time_selecionado" id="">

        <option value="">Escolha seu Time</option>
        <option value="bragantino">Bragantino</option>
        <option value="capivariano">Capivariano</option>
        <option value="corinthians">Corinthians</option>
        <option value="novorizontino">Novorizontino</option>
        <option value="mirassol">Mirassol</option>
        <option value="palmeiras">Palmeiras</option>
        <option value="primavera">Primavera</option>
        <option value="saobernardo">São Bernardo</option>

    </select>
     <button type="submit">Votar</button>
    </form>
</div>

<style>
    /* Container da votação */
.container_votacao {
    background: #0f3d1f;
    border: 2px solid #ffffff;
    border-radius: 12px;
    padding: 40px 35px;
    width: 100%;
    max-width: 420px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
    text-align: center;
    margin: 0 auto;
}

/* Select */
.container_votacao select {
    width: 100%;
    padding: 12px;
    margin-bottom: 25px;
    border-radius: 6px;
    border: none;
    outline: none;
    font-size: 1rem;
    cursor: pointer;
}

/* Opções */
.container_votacao option {
    font-size: 1rem;
}

/* Botão de votar */
.container_votacao button {
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
.container_votacao button:hover {
    background: #17a148;
    transform: scale(1.03);
}

</style>