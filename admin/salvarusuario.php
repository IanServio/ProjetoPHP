<?php
    include_once('../config.php');

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"]) or (empty($_POST["email"]))))){
                echo "<script>alert ('Nao foi possivel fazer o cadastro'); </script>";
                echo "<script> location.href = 'dashboard.php';</script>";
                exit;
            }
            $usuario = $_POST["usuario"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO loginusuarios (usuario, email, senha) VALUES ('{$usuario}' , '{$email}', '{$senha}')";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert ('Usuario Cadastrado com sucesso'); </script>";
                echo "<script>location.href='?page=listar'; </script>";
            }else{
                echo "<script>alert ('Nao foi possivel fazer o cadastro'); </script>";
                echo "<script>location.href='?page=listar'; </script>";

            }
            break;
        case 'editar':
            $usuario = $_POST["usuario"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "UPDATE loginusuarios SET usuario='{$usuario}', email='{$email}', senha='{$senha}' WHERE id={$_REQUEST['id']}";


            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert ('Usuario Editado com sucesso'); </script>";
                echo "<script>location.href='?page=listar'; </script>";
            }else{
                echo "<script>alert ('Nao foi possivel Editar o Usuario'); </script>";
                echo "<script>location.href='?page=listar'; </script>";

            }
            break;
        case 'excluir':
            $sql = "DELETE FROM loginusuarios WHERE id={$_REQUEST['id']}";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert ('Usuario Excluido com sucesso'); </script>";
                echo "<script>location.href='?page=listar'; </script>";
            }else{
                echo "<script>alert ('Nao foi possivel Excluir o Usuario'); </script>";
                echo "<script>location.href='?page=listar'; </script>";

            }
            break;
        
     }

?>