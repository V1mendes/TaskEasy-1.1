<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskEasy</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- Seus estilos CSS aqui -->
</head>

<nav>
    <a href="index.html" class="nav_title"> TASKEASY</a>
</nav>

<body>

    <form action="inserir_tarefa.php" method="post" class="add_task">
        <input type="text" id="novaTarefa" name="descricao" placeholder="Digite uma nova tarefa" required>
        <button type="submit">Enviar</button>

        <!-- <button id="adicionarBtn" type="button">Adicionar</button> -->
    </form>

    <div class="conteiner">
        <ul class="task_list" id="listaTarefas">

            <?php
            $sql = "SELECT descricao FROM tarefas";
            $resultado = $conexao->query($sql);

            // Verificar se a consulta foi bem-sucedida
            if ($resultado->num_rows > 0) {
                // Iterar sobre os resultados
                while ($row = $resultado->fetch_assoc()) {
                    echo '<li>';
                    echo '<input type="checkbox" class="checkbox-tarefa">' . $row["descricao"] . "<br>";
                    echo '</li>';
                }
            } else {
                echo "Nenhum resultado encontrado.";
            }
            ?>

        </ul>
    </div>




</body>

</html>