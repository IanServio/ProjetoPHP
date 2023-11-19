<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Substitua estas credenciais com as suas próprias
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "produtos";

    // Conectar ao banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Função para evitar SQL injection
    function limpar_entrada($conexao, $dados) {
        $dados = htmlspecialchars($dados);
        $dados = $conexao->real_escape_string($dados);
        return $dados;
    }

    // Escapa os dados do formulário para evitar SQL injection
    $titulo = limpar_entrada($conexao, $_POST["titulo"]);
    $imagem = limpar_entrada($conexao, $_POST["imagem"]);
    $link = limpar_entrada($conexao, $_POST["link"]);

    // Prepara a instrução SQL usando instruções preparadas
    $sql = $conexao->prepare("INSERT INTO produtos (titulo, imagem, link) VALUES (?, ?, ?)");

    // Associa os parâmetros
    $sql->bind_param("sss", $titulo, $imagem, $link);

    // Executa a instrução SQL
    if ($sql->execute()) {
        // Redireciona para a página de exibição
        header("Location: exibir_produtos.php");
        exit();
    } else {
        echo "Erro ao adicionar produto: " . $sql->error;
    }

    // Fecha a conexão
    $conexao->close();
}
?>



