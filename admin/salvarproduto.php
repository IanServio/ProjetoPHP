<?php
    if(empty($_POST) or (empty($_POST["titulo"]) or (empty($_POST["imagem"]) or (empty($_POST["fonte"]))))){
        echo "<script>alert ('Nao foi possivel salvar o produto'); </script>";
        echo "<script> location.href = 'dashboard.php';</script>";
        exit;
    }else{



    switch ($_REQUEST['acao']) {
        case 'editarp':
            $titulo = $_POST["titulo"];
            $imagem = $_POST["imagem"];
            $fonte = $_POST["fonte"];

            $sql = "UPDATE produtos SET titulo='{$titulo}', imagem='{$imagem}', fonte='{$fonte}' WHERE id={$_REQUEST['id']}";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert ('Produto Editado com sucesso'); </script>";
                echo "<script>location.href='?page=listar'; </script>";
            }else{
                echo "<script>alert ('Nao foi possivel Editar o  produto'); </script>";
                echo "<script>location.href='?page=listarp'; </script>";

            }
            break;
        }

    }

?>