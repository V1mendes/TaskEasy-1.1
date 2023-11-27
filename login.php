<?php

include_once("conexao.php");
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/login1.css">
    <title>TaskEasy</title>

</head>

<body>

    <header>

        <a href="index.html" class="logo"> TASKEASY</a>
        <a id="lgn" href="cada.php">Cadastre-se</a>

    </header>

    <div id="campos" class="center">

        <h1>Login</h1>

        <form action="validar_login.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <a class="esqueci" href="restaurar.php">Esqueci minha senha</a>
            <div class="button1">
            <button type="submit" value="Entrar" id="entrar" name="entrar">Entrar</button></div>

        </form>

    </div>

</body>

</html>