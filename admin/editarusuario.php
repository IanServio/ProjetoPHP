<h1> Editar usuario</h1>

<?php
    include_once('../sports-outlet/config.php');
    $sql = "SELECT * FROM loginusuarios WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label> Usuario </label>
        <input type="text" name="usuario" value=" <?php print $row->usuario;  ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Senha </label>
        <input type="text" name="senha"  class="form-control" required>
    </div>
    <div class="mb-3">
        <label> E-mail </label>
        <input type="email" name="email" value=" <?php print $row->email;  ?>" class="form-control">
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