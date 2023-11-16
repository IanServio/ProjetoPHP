<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h2>Produtos</h2>

    <?php
    // Conectar ao banco de dados (substitua com suas próprias credenciais)
    $conexao = new mysqli("localhost", "root", "", "produtos");

    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Consulta os produtos na tabela
    $sql = "SELECT * FROM produtos";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo "<li>
                    <h3>{$row['titulo']}</h3>
                    <img src='{$row['imagem']}' alt='{$row['titulo']}' width='100'>
                    <p>Fonte: <a href='{$row['link']}' target='_blank'>{$row['link']}</a></p>
                  </li>";
        }
        echo '</ul>';
    } else {
        echo '<p>Nenhum produto cadastrado.</p>';
    }

    // Fecha a conexão
    $conexao->close();
    ?>
</body>
</html>

