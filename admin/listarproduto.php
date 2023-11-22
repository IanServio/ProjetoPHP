<h1> Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos ";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Titulo</th>";
            print "<th>Imagem</th>";
            print "<th>Fonte</th>";
            print "<th>ACOES</th>";
            print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id . "</td>";
            print "<td>".$row->titulo. "</td>";
            print "<td>".$row->imagem. "</td>";
            print "<td>".$row->fonte. "</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editarp&id=".$row->id."';\" class='btn btn-success'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarp&acao=excluirp&id=".$row->id."'; return true;}else{return false;}\" class='btn btn-danger'> Excluir </button>
                </td>";

            print "</tr>";

        }
        print "</table>";
    }else{
       echo "<p class='alert alert-danger'>Nao Encontrou resultados!</p>";
    }
?>