<?php
include 'config/database.php';
include 'includes/header.php';


$id = $_GET['id'];


$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt->execute(['id' => $id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="post" action="atualizar_dados.php">
    <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo ($contato['nome']); ?>">
    <br>
    <label>Telefone:</label>
    <input type="text" name="telefone" value="<?php echo ($contato['telefone']); ?>">
    <br>
    <label>Profissão:</label>
    <input type="text" name="profissao" value="<?php echo ($contato['profissao']); ?>">
    <br>
    <label>E-mail:</label>
    <input type="text" name="email" value="<?php echo ($contato['email']); ?>">
    <br>
    <label>Rua:</label>
    <input type="text" name="rua" value="<?php echo ($contato['rua']); ?>">
    <br>
    <label>Número Rua:</label>
    <input type="text" name="numero" value="<?php echo ($contato['numero']); ?>">
    <br>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?php echo ($contato['cidade']); ?>">
    <br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?php echo ($contato['estado']); ?>">
    <br>
    <input type="submit" value="Salvar">
</form>
