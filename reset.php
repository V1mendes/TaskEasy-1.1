<?php

include("conexao.php");

$email = $_POST["email"];
$restaura = $_POST["rest"];

if (isset($restaura)) {
    $verifica = $conexao->query("SELECT * FROM cadastros WHERE email = '$email'") or die("Erro ao selecionar");

    if ($verifica->num_rows <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Email não identificado');window.location.href='restaurar.php';</script>";
        die();
    } else {
        header("Location: nova_senha.php");
    }
}
?>