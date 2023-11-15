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
        <title>Log-in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container.fluid">
                <a class="navbar-brand">Sistema X </a>
                <?php
                    echo "Ola, ".$_SESSION['nome'];
                    echo "<a href ='logout.php' class='btn btn-danger'>Sair</a>";
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
                    <a class="nav-link" href="?page=listar">Listar Usuario</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include_once("../config.php");
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
                            default:
                                echo "<h1> Bem Vindo! </h1>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>