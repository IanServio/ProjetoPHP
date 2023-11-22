<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        li {
            border: 1px solid #ddd;
            margin: 10px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 150px;
            height: 250px;
            position: relative;
            transition: transform 0.3s ease;
        }

        li:hover {
            transform: scale(1.05);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            object-fit: cover;
            max-height: 100px;
        }

        h3 {
            color: #333;
            font-size: 14px;
            margin-bottom: 8px;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1;
        }

        .comprar-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 14px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-top: auto;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>
   
    <?php
    $conexao = new mysqli("localhost", "root", "", "loginusuarios");
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
    $sql = "SELECT * FROM produtos";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo "<li>
                    <img src='{$row['imagem']}' alt='{$row['titulo']}'>
                    <h3>{$row['titulo']}</h3>
                    <a href='{$row['fonte']}' class='comprar-btn' target='_blank'>Comprar</a>
                </li>";
        }
        echo '</ul>';
    } else {
        echo '<p>Nenhum produto cadastrado.</p>';
    }
    $conexao->close();
    ?>
</body>
</html>



