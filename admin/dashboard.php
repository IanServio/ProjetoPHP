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
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #372162;
        }

        .navbar {
            background-color: #fff;
        }

        .navbar-brand {
            color: #000;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #000;
        }

        .nav-link {
            color: #000;
        }

        .nav-link:hover {
            color: #372162;
            
        }
        .logout-btn {
            background-color: red;
            color: white;
            padding: -5px 1px;
            text-align: center;
            text-decoration: none;
            border: 1px;
            border-radius: 5px;
        
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
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
                    <li class="nav-item logout-btn">
                    <a class="nav-link" href="logout.php">Sair</a>
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
                            case "editarp":
                                include("editarproduto.php");
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