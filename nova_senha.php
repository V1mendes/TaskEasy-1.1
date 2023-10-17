<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="proces_nova_senha.php" method="post">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="senha">Senha</label>
        <input type="password" name="nova_senha" id="nova_senha" required>

        <button type="submit" class="button button1" value="Enviar">Enviar</button>
        <!-- <button id="Cadastro" class="button button1">Continuar</button> -->

    </form>

</body>

</html>