<?php
    session_start();
    if(empty($_SESSION)){
        print "<script> location.href = 'index.php';</script>";
    }

?>

<div style="background-color: #372162; display: flex; justify-content: center; align-items: center; margin-top: 0px;">

  <a href="../sports-outlet/index.php">
    <img width="50" src="../png/logo-menu.png" alt="calibre" style="margin-right: 10px; margin-top: 0px;">
  </a>

  <!-- Menu de links -->
  <a href="index.php" style="color: #ffffff; font-family: Calibri; text-decoration: none; margin-right: 15px;">Home</a>

  <a href="novo-usuario.php" style="color: #ffffff; font-family: Calibri; text-decoration: none; margin-right: 15px;">Novo Usuário</a>

  <a href="listar-usuario.php" style="color: #ffffff; font-family: Calibri; text-decoration: none; margin-right: 15px;">Listar Usuários</a>

  <a href="novo-produto.php" style="color: #ffffff; font-family: Calibri; text-decoration: none; margin-right: 15px;">Adicionar Produto</a>

  <a href="listar-produto.php" style="color: #ffffff; font-family: Calibri; text-decoration: none; margin-right: 15px;">Listar Produtos</a>

</div>
