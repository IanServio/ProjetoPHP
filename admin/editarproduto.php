<?php
$userId = $_REQUEST['id'];
$sql = "SELECT * FROM loginusuarios WHERE id = $userId";
$result = $conn->query($sql);
$userData = $result->fetch_assoc();
?>

<!-- Formulário de Edição -->
<form action="?acao=editar&id=<?php echo $userId; ?>" method="post">
    <!-- Campos do formulário preenchidos com os dados existentes do usuário -->
    <input type="text" name="usuario" value="<?php echo $userData['usuario']; ?>">
    <input type="text" name="email" value="<?php echo $userData['email']; ?>">
    <input type="password" name="senha" value="<?php echo $userData['senha']; ?>">
    <input type="submit" value="Salvar Edição">
</form>
