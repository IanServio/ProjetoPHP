<div style="background-color: #372162;
    text-align: center;
    padding: 5px;
    border: 1px solid black;
    border-radius: 5px;
    max-width: 400px;
    margin: 10 auto;">
    <h1 style="font-family: 'calibre', sans-serif;color:white">Fale Conosco</h1>

    <style>
        h3 {
            font-family: 'calibre', sans-serif;color:white
        }
    </style>
    <h3>
        <form action="?pg=sucesso" method="post">
            <label for="nome"><b>Nome</b></label><br>
            <input type="text" name="nome" id="nome" style="width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid black;
    border-radius: 3px;
    font-size: 16px;" required><br>

            <label for="email"><b>E-mail</b></label><br>
            <input type="text" name="email" id="email" style="width: 100%; padding: 10px;
    margin-bottom: 10px;
    border: 1px solid black;
    border-radius: 3px;
    font-size: 16px;" required><br>

            <label for="assunto"><b>Assunto</b></label><br>
            <select name="assunto" id="assunto" style="width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid black;
    border-radius: 3px;
    font-size: 16px;" required>
                <style>
                    h4 {
                        font-family: 'calibre', sans-serif;
                    }
                </style>
                <h4>
                    <option value="Sugestao">Sugestão</option>
                    <option value="Reclamacao">Reclamação</option>
                    <option value="Duvidas">Dúvidas</option>
                </h4>
            </select><br>

            <label for="mensagem"><b>Mensagem</b></label><br>
            <textarea name="mensagem" id="mensagem" style="width: 100%; padding: 10px;
    margin-bottom: 10px;
    border: 1px solid black;
    border-radius: 3px;
    font-size: 16px;
    height: 150px;" required></textarea><br>

            <input type="submit" value="Enviar" style="background-color: #84fa84;
    color: black;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 18px;">
    </h3>
    </form>
</div>
