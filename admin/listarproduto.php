<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "loginusuarios";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

<div class="container mt-5">
    <h1 class="text-center">Listar Produtos</h1>
    <?php
    $sql = "SELECT * FROM produtos ";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-bordered text-center'>";
        echo "<thead class='thead-light'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Titulo</th>";
        echo "<th>Imagem</th>";
        echo "<th>Fonte</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->id . "</td>";
            echo "<td>" . $row->titulo . "</td>";
            echo "<td><img src='" . $row->imagem . "' alt='Imagem' style='max-width: 100px; max-height: 100px;'></td>";
            echo "<td>" . $row->fonte . "</td>";
            echo "<td>
            <button onclick=\"location.href='?page=editarp&id=".$row->id."';\" class='btn btn-success'> Editar </button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarp&acao=excluirp&id=".$row->id."'; return true;}else{return false;}\" class='btn btn-danger'> Excluir </button>
        </td>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger text-center'>Não encontrou resultados!</p>";
    }

    $conn->close();
    ?>
</div>


