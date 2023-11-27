<?php

include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEasy</title>
    <link rel="stylesheet" href="assets/css/restaurar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>

<body>

    <div>

        <header class="header">

            <a href="index.html" class="logo"> TASKEASY</a>

            <nav class="navbar">
                <a href="login.php"> Entrar </a>
                <a href="cada.php"> Cadastrar </a>
            </nav>

        </header>

    </div>

    <div class="home">

        <div class="home-content">

            <H1> Esqueceu sua senha? </H1>

            <p> Para redefinir sua senha, por favor digite o endereço de email da sua conta para validar a existência da conta. </p>

            <form class="center" method="post" action="reset.php">

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <div class="caixa">
                <button class="button1" type="submit" value="restaurar" id="rest" name="rest" required>Restaurar</button>
                </div>
            </form>

        </div>

        <div class="img_index">

            <img src="assets/img/img_restaurar.png" alt="imagem de redefinição">

        </div>

    </div>

</body>

</html>