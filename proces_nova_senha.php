<?php

include("conexao.php");

$nova_senha = $_POST['nova_senha']; 
$email = $_POST['email']; 
$enviar =$_POST["enviar"];

if (isset($enviar)){
    $verifica = $conexao->query("UPDATE cadastros SET senha = '$nova_senha' WHERE email = '$email'") or die("Erro ao selecionar");
    
    if($verifica->num_rows <= 0){
        
        echo "<script language='javascript' type='text/javascript'>
            alert('Senha redefinida com sucesso');window.location.href='login.php';</script>";
        die();
    }
}

?>
