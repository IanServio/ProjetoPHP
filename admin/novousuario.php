<h1> Novo usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label> Usuario </label>
        <input type="text" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
        <label> Senha </label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label> E-mail </label>
        <input type="email" name="email" class="form-control">
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