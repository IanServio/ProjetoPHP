<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $conexao = new mysqli("localhost", "root", "", "loginusuarios");

   if ($conexao->connect_error) {
      die("Falha na conexão: " . $conexao->connect_error);
   }

   $titulo = $_POST['titulo'];
   $imagem = $_POST['imagem'];
   $fonte = $_POST['fonte'];

   $sql = "INSERT INTO produtos (titulo, imagem, fonte) VALUES ('$titulo', '$imagem', '$fonte')";
   if ($conexao->query($sql) === TRUE) {
      echo "<script>alert ('Produto adicionado com sucesso.'); </script>";
      echo "<script>location.href='../admin/dashboard.php?page=novop'; </script>";
   } else {
      echo "<script>alert ('Erro ao adicionar o produto'); </script>". $conexao->error;;
      echo "<script>location.href='../admin/dashboard.php?page=novop'; </script>";
   }

   $conexao->close();
}
?>
