<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/nova_senha.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <title>TASKEASY</title>
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

    <div id="campos" class="center">

        <h1>Criar nova senha</h1>
        <P>Preencha o primeiro campo com o email correspondente a troca de senha e modifique apenas a senha</P>

        <form action="proces_nova_senha.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="nova_senha" id="nova_senha" required>

            <input type="submit" value="enviar" id="enviar" name="enviar" required>
            <!-- <button id="Cadastro" class="button button1">Continuar</button> -->

        </form>

    </div>

</body>

</html>