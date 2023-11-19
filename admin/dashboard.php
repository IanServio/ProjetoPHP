<?php
    session_start();
    if(empty($_SESSION)){
        print "<script> location.href = 'index.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="body-back">
        <nav class="navbar navbar-light bg-light">
            <div class="container.fluid">
                <a class="navbar-brand">Sistema De Cadastro </a>
                <?php
                    echo "Ola, ".$_SESSION['nome'];
                    echo "<a href ='logout.php' class='btn btn-danger class-1'>Sair</a>";
                ?>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Novo Usuario</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Listar Usuarios</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=novop">Adicionar Produto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=listarp">Listar Produtos</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include_once("../sports-outlet/config.php");
                        switch($_REQUEST['page']){
                            case"novo":
                                include("novousuario.php");
                            break;
                            case "listar":
                                include("listarusuario.php");
                            break;
                            case "salvar":
                                include("salvarusuario.php");
                                break;
                            case "editar":
                                include("editarusuario.php");
                                break;
                            case "novop":
                                include("novoproduto.php");
                                break;
                            case "salvarp":
                                include("salvarproduto.php");
                                break;
                            case "listarp":
                                include("listarproduto.php");
                                break;
                            default:
                                echo "<h1> Bem Vindo! </h1>
                                <p>Aqui voce poderar, adicionar, editar, excluir e listar todas as opcoes disponiveis </p>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
        <style>
            .body-back{
                background-color: #372162;
            }
            h1{
                color: white;
            }
            p{
                color: white;
            }
            .navbar{
                display: flex;
                justify-content: center;
            }
            .class-1{
                position: relative;
                left: 750px;
                margin-top: 10px;
            }
            .navbar-brand{
                border: 2px solid #333;
                border-radius: 10px;
            }
            
        </style>
    </body>
</html>