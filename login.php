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
        <a href="cada.php">Cadastre-se</a>
    </header>

    <div id="campos" class="center">

        <h1>Login</h1>

        <form action="validar_login.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <button type="submit" class="button button1" value="Entrar">Enviar</button>


        </form>

</body>

</html>