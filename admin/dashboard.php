<?php
    session_start();
    if(empty($_SESSION)){
        print "<script> location.href = 'index.php';</script>";
    }

?>

<div style="background-color: #372162; display: flex; justify-content: center; align-items: center; margin-top: 0px;">

  <a href="../sports-outlet/index.php">
    <img width="80" src="../png/menu-admin.png" alt="calibre" style="margin-right: 8px; margin-top: 10px;">
  </a>
  <style>
    /* Style for the navigation links */
    .nav-link {
      color: #ffffff;
      font-family: Calibri;
      text-decoration: none;
      margin-right: 15px;
      padding: 5px 10px; /* Adjust padding as needed */
      border: 1px solid #ffffff; /* Border style */
      border-radius: 10px; /* Rounded corners */
      background-color: #000000; /* Background color */
      display: inline-block; /* Display as inline block to create a box */
    }
  </style>
</head>
<body>

  <a href="index.php" class="nav-link">Home</a>
  <a href="novo-usuario.php" class="nav-link">Novo Usuário</a>
  <a href="listar-usuario.php" class="nav-link">Listar Usuários</a>
  <a href="novo-produto.php" class="nav-link">Adicionar Produto</a>
  <a href="listar-produto.php" class="nav-link">Listar Produtos</a>

</body>
</div>

