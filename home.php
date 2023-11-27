<?php

session_start();
include_once("conexao.php");

if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEasy</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    
</head>

<body>

    <nav>
        
        <a href="index.html" class="nav_title">TASKEASY</a>
        <a href="sair.php" class="sair">Sair</a>
    
    </nav>

    <form action="inserir_tarefa.php" method="post" class="add_task">

        <input type="text" class="input_add" id="novaTarefa" name="descricao" placeholder="Digite uma nova tarefa" required>
        <button type="submit">Adicionar</button>

    </form>

    <div class="conteiner">

        <form action="excluir_tarefas.php" method="post" name="del_task">

            <ul class="task_list" id="listaTarefas">

                <?php

                $sql = "SELECT id, descricao FROM tarefas WHERE user_id = {$_SESSION['user_id']}"; 
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows > 0) {

                    while ($row = $resultado->fetch_assoc()) {
                        echo '<li>';
                        echo "<input type='checkbox' class='checkbox-tarefa' name='tarefas_id[]' value='" . $row["id"] . "'>" . $row["descricao"] . "<br>";
                        echo '</li>';
                    }

                } else {

                    echo "Exemplo: Atividade de Mobile (12/12)";

                }
                ?>

                <input type="submit" class="bt_excluir" value="Apagar tarefas selecionadas" name="deltask" required>

            </ul>

        </form>

    </div>

</body>

</html>
