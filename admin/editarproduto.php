<h1> Editar Produto</h1>

<?php
    include_once('../sports-outlet/config.php');
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvarp" method="POST">
    <input type="hidden" name="acao" value="editarp">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label> Titulo </label>
        <input type="text" name="titulo" value=" <?php print $row->titulo;  ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Imagem </label>
        <input type="text" name="imagem"  value=" <?php print $row->imagem;  ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label> Fonte </label>
        <input type="text" name="fonte" value=" <?php print $row->fonte;  ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"> Enviar</button>
    </div>
    <style>
        .mb-3{
            color: white;
        }
    </style>
</form>
