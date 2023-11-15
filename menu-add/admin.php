<?php
include 'conexao.php';

// Adicionar Produto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar'])) {
    $titulo = $_POST['titulo'];
    $imagem = $_POST['imagem'];
    $link_fonte = $_POST['link_fonte'];

    $sql = "INSERT INTO produtos (titulo, imagem, link_fonte) VALUES ('$titulo', '$imagem', '$link_fonte')";
    $conexao->query($sql);
}

// Editar Produto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $imagem = $_POST['imagem'];
    $link_fonte = $_POST['link_fonte'];

    $sql = "UPDATE produtos SET titulo='$titulo', imagem='$imagem', link_fonte='$link_fonte' WHERE id=$id";
    $conexao->query($sql);
}

// Excluir Produto
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['excluir'])) {
    $id = $_GET['excluir'];

    $sql = "DELETE FROM produtos WHERE id=$id";
    $conexao->query($sql);
}

// Consultar Produtos
$sql = "SELECT * FROM produtos";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Administração de Produtos</title>
</head>
<body>

<!-- Formulário de Adição -->
<form method="post" action="admin.php">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    
    <label for="imagem">Imagem URL:</label>
    <input type="text" name="imagem" required>
    
    <label for="link_fonte">Link da Fonte:</label>
    <input type="text" name="link_fonte" required>
    
    <button type="submit" name="adicionar">Adicionar Produto</button>
</form>

<!-- Listar Produtos -->
<?php
while ($row = $resultado->fetch_assoc()) {
    echo '<div style="border: 1px solid #ddd; padding: 10px; margin: 10px;">';
    echo '<h3>' . $row['titulo'] . '</h3>';
    echo '<img src="' . $row['imagem'] . '" alt="' . $row['titulo'] . '" style="max-width: 100%;">';
    echo '<p>Fonte: <a href="' . $row['link_fonte'] . '" target="_blank">' . $row['link_fonte'] . '</a></p>';
    echo '<form method="post" action="admin.php" style="display: inline-block;">';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '<button type="submit" name="editar">Editar</button>';
    echo '</form>';
    echo '<a href="admin.php?excluir=' . $row['id'] . '" onclick="return confirm(\'Tem certeza que deseja excluir este produto?\')" style="color: red;">Excluir</a>';
    echo '</div>';
}
?>

</body>
</html>

