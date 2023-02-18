<?php

    // echo '<pre>';
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaHash = sha1($senha);
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    // testes:
    // echo $nome , '<br>';
    // echo $sobrenome , '<br>';
    // echo $email , '<br>';
    // echo $senha , '<br>';
    // echo $senhaHash , '<br>';
    // echo $newsletter , '<br>';

    // echo '</pre>';

    $server = 'localhost';
    $db = 'aula_php';
    $user = 'root';
    $pass = '';

    // cria a conexão
    $conn = mysqli_connect($server, $user, $pass, $db);

    if (!$conn) {
        die('Falha de conexão: ' . mysqli_connect_error());
    } else {
        echo 'Conectado';
    }

    // query a ser executada
    $sql = "INSERT INTO tb_usuario
    (nome, sobrenome, email, senha, newsletter)
    VALUES
    ('{$nome}', '{$sobrenome}', '{$email}', '{$senhaHash}', '{$newsletter}')";

    // roda a query e testa
    if(mysqli_query($conn, $sql)) {
        echo 'Registro inserido com sucesso!<br>';
        // fecha a conexão
        mysqli_close($conn);
        header('Location: sucesso.html');
    } else {
        echo '<br>Erro: ' . $sql . '<br>' . mysqli_error($conn);
    }

    
?>