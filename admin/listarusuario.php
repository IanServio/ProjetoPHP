<h1> Listar usuarios</h1>
<?php
    $sql = "SELECT * FROM loginusuarios ";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>NOME</th>";
            print "<th>E-MAIL</th>";
            print "<th>Acoes</th>";
            print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id. "</td>";
            print "<td>".$row->usuario. "</td>";
            print "<td>".$row->email. "</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'> Editar </button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'> Excluir </button>
                   </td>";
            print "</tr>";

        }
        print "</table>";
    }else{
       echo "<p class='alert alert-danger'>Nao Encontrou resultados!</p>";
    }
?>
