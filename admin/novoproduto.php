<h1> Novo Produto</h1>
<form action="?page=salvarp" method="POST">
<input type="hidden" name="acao" value="novop">
    <div class="mb-3">
        <label> Titulo </label>
        <input type="text" name="titulo" class="form-control">
    </div>
    <div class="mb-3">
        <label> Imagem </label>
        <input type="text" name="imagem" class="form-control">
    </div>
    <div class="mb-3">
        <label> Fonte </label>
        <input type="text" name="fonte" class="form-control">
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