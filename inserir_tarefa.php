<?php

include("conexao.php");

$descricao = $_POST['descricao']; 


$sql2 = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";


if(mysqli_query($conexao, $sql2)){
    header("location: home.php");
}else{
    echo "Erro". mysqli_connect_error($conexao);
}


mysqli_close($conexao);
?>