<?php

include("conexao.php");

$nova_senha = $_POST['nova_senha']; 
$email = $_POST['email']; 

$sql = "UPDATE cadastros SET senha = '$nova_senha' WHERE email = '$email'";

if(mysqli_query($conexao, $sql)){
    echo "Senha redefinida com sucesso";
}else{
    echo "Erro". mysqli_connect_error($conexao);
}


mysqli_close($conexao);
?>