<?php
session_start();
include("conexao.php");

$descricao = $_POST['descricao'];
$user_id = $_SESSION['user_id']; 

$sql2 = "INSERT INTO tarefas (descricao, user_id) VALUES ('$descricao', $user_id)";

if (mysqli_query($conexao, $sql2)) {
    header("location: home.php");
} else {
    echo "Erro" . mysqli_connect_error($conexao);
}

mysqli_close($conexao);
?>
