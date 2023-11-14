<!DOCTYPE html>
<html lang="en">
<head>

    <!--Botão para voltar para o inicio-->
<a href="index.php" style="margin-right: 5px;
     color: black;
      font-family: Calibri;
        padding: 5px;
         border: 1px solid black;
          background-color: red;
           border-radius: 5px;
           text-decoration: none;
           ">Inicio</a>
           <!--Fimm-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-color: #372162;
        }
        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-log-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Login Usuario</h3>
                        </div>
                        <div class="card-body">
                            <form action="verificalogin.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="password" name="senha" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>