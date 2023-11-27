<?php

include("conexao.php");

$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar se o e-mail já está cadastrado
$verifica = $conexao->query("SELECT * FROM cadastros WHERE email = '$email'") or die("Erro ao selecionar");

if ($verifica->num_rows > 0) {
    echo "<script language='javascript' type='text/javascript'>
    alert('E-mail já cadastrado, tente novamente');window.location.href='cada.php';</script>";
    exit();
}

// Inserir dados se o e-mail não estiver cadastrado
$sql = "INSERT INTO cadastros(nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {

    echo "<script language='javascript' type='text/javascript'>
    alert('Cadastro realizado com sucesso');window.location.href='login.php';</script>";

} else {

    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
