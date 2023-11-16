<div
    style="background-color: #372162; text-align: center; padding: 20px; border: 1px solid #5e4778; border-radius: 10px; max-width: 400px; margin: 20px auto; color: white;">

    <h1 style="font-family: 'calibre', sans-serif; margin-bottom: 20px;">Fale Conosco</h1>

    <form action="?pg=sucesso" method="post">

        <label for="nome" style="display: block;font-family: 'calibre', sans-serif; margin-bottom: 8px;"><b>Nome</b></label>
        <input type="text" name="nome" id="nome"
            style="width: 100%; max-width: 100%; padding: 12px; border: 1px solid #5e4778; border-radius: 8px; font-size: 16px; box-sizing: border-box; margin-bottom: 15px;"><br>

        <label for="email" style="display: block;font-family: 'calibre', sans-serif; margin-bottom: 8px;"><b>E-mail</b></label>
        <input type="text" name="email" id="email"
            style="width: 100%; max-width: 100%; padding: 12px; border: 1px solid #5e4778; border-radius: 8px; font-size: 16px; box-sizing: border-box; margin-bottom: 15px;"><br>

        <label for="assunto" style="display: block;font-family: 'calibre', sans-serif; margin-bottom: 8px;"><b>Assunto:</b></label>
        <select name="assunto" id="assunto"
            style="width: 100%; max-width: 100%; padding: 12px; border: 1px solid #5e4778; border-radius: 8px; font-size: 16px; box-sizing: border-box; margin-bottom: 15px;">
            <option value="Sugestao">Sugestão</option>
            <option value="Reclamacao">Reclamação</option>
            <option value="Duvidas">Dúvidas</option>
        </select><br>

        <label for="mensagem" style="display: block;font-family: 'calibre', sans-serif; margin-bottom: 8px;"><b>Mensagem</b></label>
        <textarea name="mensagem" id="mensagem"
            style="width: 100%; max-width: 100%; padding: 12px; border: 1px solid #5e4778; border-radius: 8px; font-size: 16px; box-sizing: border-box; margin-bottom: 15px; resize: vertical;"></textarea><br>

        <input type="submit" value="Enviar"
            style="background-color: #84fa84;font-family: 'calibre', sans-serif; color: black; border: none; padding: 12px 20px; cursor: pointer; border-radius: 8px; font-size: 18px;">

    </form>
</div>