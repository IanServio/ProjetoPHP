<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        echo "<script> location.href = 'paginalogin.php';</script>";
    }

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM loginusuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";


    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        echo "<script> location.href = 'index.php';</script>";
    }else{
        echo "<script>alert('Usuario e/ou Senha Incorreta');</script>";
        echo "<script> location.href = 'paginalogin.php';</script>";
    }



?>