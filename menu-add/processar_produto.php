<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados (substitua com suas próprias credenciais)
    $conexao = new mysqli("localhost", "root", "", "produtos");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Escapa os dados do formulário para evitar SQL injection
    $titulo = $conexao->real_escape_string($_POST["titulo"]);
    $imagem = $conexao->real_escape_string($_POST["imagem"]);
    $link = $conexao->real_escape_string($_POST["link"]);

    // Insere os dados na tabela
    $sql = "INSERT INTO produtos (titulo, imagem, link) VALUES ('$titulo', '$imagem', '$link')";
    
    if ($conexao->query($sql) === TRUE) {
        // Redireciona para a página de exibição
        header("Location: exibir_produtos.php");
        exit();
    } else {
        echo "Erro ao adicionar produto: " . $conexao->error;
    }

    // Fecha a conexão
    $conexao->close();
}
?>


