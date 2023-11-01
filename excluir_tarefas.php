<?php
session_start();
include_once("conexao.php");

$tarefas_id = $_POST["tarefas_id"]; // Agora você pode acessar diretamente o array

if (!empty($_POST['deltask'])) {
    if (!empty($tarefas_id)) {
        foreach ($tarefas_id as $id) {
            $verifica = $conexao->query("DELETE FROM tarefas WHERE id = $id LIMIT 1");
        }

        echo "<script language='javascript' type='text/javascript'>
        alert('Tarefa(s) excluída(s) com sucesso');window.location.href='home.php';</script>";
        die();
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Erro: Nenhuma tarefa selecionada');window.location.href='home.php';</script>";
        die();
    }
} else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Erro: Tarefa não encontrada');window.location.href='home.php';</script>";
    die();
}
?>
