<?php

include("conexao.php");

$nome_completo = $_POST['nome_completo']; 
$email = $_POST['email']; 
$senha = $_POST['senha']; 

$sql = "INSERT INTO cadastros(nome_completo, email, senha )
values ('$nome_completo', '$email', '$senha' )";

$sql2 = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";


if(mysqli_query($conexao, $sql)){
    header("location: login.php");
}else{
    echo "Erro". mysqli_connect_error($conexao);
}


mysqli_close($conexao);
?>
