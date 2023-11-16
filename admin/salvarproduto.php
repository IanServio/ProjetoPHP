<?php
    if(empty($_POST) or (empty($_POST["titulo"]) or (empty($_POST["imagem"]) or (empty($_POST["fonte"]))))){
        echo "<script>alert ('Nao foi possivel salvar o produto'); </script>";
        echo "<script> location.href = 'dashboard.php';</script>";
        exit;
    }



    switch ($_REQUEST['acao']) {
        case 'novop':
            $titulo = $_POST["titulo"];
            $imagem = $_POST["imagem"];
            $fonte = $_POST["fonte"];

            $sql = "INSERT INTO produtos (titulo, imagem, fonte) VALUES ('{$titulo}' , '{$imagem}', '{$fonte}')";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert ('Produto Cadastrado com sucesso'); </script>";
                echo "<script>location.href='?page=listar'; </script>";
            }else{
                echo "<script>alert ('Nao foi possivel fazer o cadastro do produto'); </script>";
                echo "<script>location.href='?page=listar'; </script>";

            }
            break;
        }



?>