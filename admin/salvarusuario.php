<?php
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