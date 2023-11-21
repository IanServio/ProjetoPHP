<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"]) or (empty($_POST["email"]))))){
        echo "<script> location.href = 'paginalogin.php';</script>";
    }

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql = "INSERT INTO loginusuarios (usuario, email, senha) VALUES ('{$usuario}' , '{$email}', '{$senha}')";


    $res = $conn->query($sql) or die($conn->error);

    

    $qtd = $res->num_rows;

    if($sql == true){
        echo "<script>alert ('Usuario Cadastrado com Sucesso!'); </script>";
        echo "<script> location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Nao foi possivel realizar o cadastro');</script>";
        echo "<script> location.href = 'paginalogin.php';</script>";
    }



?>