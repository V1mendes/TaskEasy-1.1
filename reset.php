<?php

include("conexao.php");

$email = $_POST["email"];

$sql = "SELECT * FROM cadastros WHERE email = '$email'";
$result = $conexao->query($sql);

if ($result != $email) {

    header("Location: nova_senha.php");

} else {

    echo "E-mail não encontrado.";
}

mysqli_close($conexao);
?>