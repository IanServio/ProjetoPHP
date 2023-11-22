<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Conectar ao banco de dados (substitua com suas próprias credenciais)
   $conexao = new mysqli("localhost", "root", "", "loginusuarios");

   // Verifica a conexão
   if ($conexao->connect_error) {
      die("Falha na conexão: " . $conexao->connect_error);
   }

   // Recupera os dados do formulário
   $titulo = $_POST['titulo'];
   $imagem = $_POST['imagem'];
   $fonte = $_POST['fonte'];

   // Insere os dados no banco de dados
   $sql = "INSERT INTO produtos (titulo, imagem, fonte) VALUES ('$titulo', '$imagem', '$fonte')";
   if ($conexao->query($sql) === TRUE) {
      echo "Produto adicionado com sucesso!";
   } else {
      echo "Erro ao adicionar o produto: " . $conexao->error;
   }

   // Fecha a conexão
   $conexao->close();
}
?>
