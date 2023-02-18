<?php
    $action = 'getTasks';
    require_once 'task_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista de Tarefas</title>
</head>
<body>

    <header>

        <nav class="navbar navbar-dark bg-primary">

            <a class="navbar-brand" href="index.php">

                <!-- ícone de: https://icons.getbootstrap.com/icons/card-checklist/ -->

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">

                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>

                    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>

                </svg>

                ToDo List

            </a>

        </nav>

    </header>

    <main>

        <div class="container pt-5">

            <h5>Incluir tarefa:</h5>

            <form  method="POST" action="task_controller.php?act=addTask">

            <div class="input-group">

                <input type="text" name="task" required class="form-control" autofocus placeholder="Nova tarefa...">

                <div class="input-group-append">

                    <button class="btn btn-primary" type="submit">Adicionar</button>

                </div>

            </div>

            </form>

            <hr>

            <h2>Sua lita de tarefas:</h2>

            <?php foreach($tasks as $t) : ?>

            <ul>

                <li><?= $t["task"] ?> - <a href="task_controller.php?act=deleteTask&taskID=<?=$t["taskID"]?>" class="btn btn-sm btn-success">Concluir</a></li>

            </ul>

            <?php endforeach ?>

        </div>

    </main>

</body>