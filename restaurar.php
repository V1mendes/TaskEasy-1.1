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
            <a href="#" class="logo"> logo</a>

            <nav class="navbar">
                <a href="#" class="active"> entrar </a>
                <a href="#"> cadastrar </a>
            </nav>
        </header>
    </div>

    <section class="home">

        <div class="home-content">

            <H1> Esqueceu sua senha? </H1>

            <p> Para redefinir sua senha, por favor digite o endereço de email da sua conta </p>

            <form method="post" action="reset.php">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <button type="submit" value="enviar">Enviar</button>
            </form>
           

            <div class="btn-box">
                <a href="#"> redefinir minha senha </a>
            </div>

            <div>class="btn-box">
                <a href="#"> voltar ao login </a>
            </div>

            <div class="img_index">
                <img src="assets/img/img_restaurar.png" alt="imagem de redefinição">
            </div>

    </section>


</body>

</html>