
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TaskEasy</title>
    <link rel="stylesheet" href="assets/css/cadastro.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
</head>

<body>

    <header>
        <a href="index.html" class="logo"> TASKEASY</a>
        <a id="lgn" href="login.php">Entrar</a>
    </header>

    <div id="campos" class="center">

        <h1>Cadastre-se</h1>

        <form action="cadastro.php" method="post">

            <label for="nome_completo">Nome Completo</label>
            <input type="text" name="nome_completo" id="nome_completo" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>
            <a class="esqueci" href="login.php">Ja tenho uma conta TASKEASY</a>
            <div>

            

            <button type="submit" class="button" value="Enviar">Enviar</button>
            </div>
            
        </form>
        
    </div>

</body>

</html>