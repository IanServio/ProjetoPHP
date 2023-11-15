<?php
    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"]) or (empty($_POST["email"]))))){
        echo "<script>alert ('Nao foi possivel fazer o cadastro'); </script>";
        echo "<script> location.href = 'dashboard.php';</script>";
        exit;
    }


    switch ($_REQUEST['acao']) {
        case 'cadastrar':
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
            # code...
            break;
        case 'deletar':
            # code...
            break;
        
     }

?>