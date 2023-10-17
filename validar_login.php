<?php

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM cadastros WHERE email = '$email'";
$result = $conexao->query($sql);

$sql1 = "SELECT * FROM cadastros WHERE senha = '$senha'";
$result1 = $conexao->query($sql1);

if ($result != $email && $result1 != $senha) {

    header("Location: home.php");

} else {

    echo "Email ou senha erradaestão errados";
}

mysqli_close($conexao);
?>