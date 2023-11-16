<?php

session_start();

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$entrar = $_POST["entrar"];

if (isset($entrar)) {

    $verifica = $conexao->query("SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'") or die("Erro ao selecionar");

    if ($verifica->num_rows <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location.href='login.php'</script>";
        die();

    } else {
        
        $dados = $verifica->fetch_assoc();
        $_SESSION['user_id'] = $dados['id_cad'];
        header("Location: home.php");

    }
}
 
?>
