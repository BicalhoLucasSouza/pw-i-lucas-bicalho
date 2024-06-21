<?php
include 'config/database.php';
include 'includes/header.php';


$id = $_GET['id'];


$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt->execute(['id' => $id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<html>
    <head>
    <link rel="stylesheet" href="../css/edit.css"> 
    </head>
        <body>
        <fieldset class="fieldset" method="post" action="atualizar_dados.php">
            <input class="input1" type="hidden" name="id" value="<?php echo $contato['id']; ?>">
            <label class="label1">Nome:</label>
            <input type="text" name="nome" value="<?php echo ($contato['nome']); ?>">
            <br>
            <label class="label1">Telefone:</label>
            <input class="input1" type="text" name="telefone" value="<?php echo ($contato['telefone']); ?>">
            <br>
            <label class="label1">Profissão:</label>
            <input class="input1" type="text" name="profissao" value="<?php echo ($contato['profissao']); ?>">
            <br>
            <label class="label1">E-mail:</label>
            <input class="input1" type="text" name="email" value="<?php echo ($contato['email']); ?>">
            <br>
            <label class="label1">Rua:</label>
            <input class="input1" type="text" name="rua" value="<?php echo ($contato['rua']); ?>">
            <br>
            <label class="label1">Número Rua:</label>
            <input class="input1" type="text" name="numero" value="<?php echo ($contato['numero']); ?>">
            <br>
            <label class="label1">Cidade:</label>
            <input class="input1" type="text" name="cidade" value="<?php echo ($contato['cidade']); ?>">
            <br>
            <label class="label1">Estado:</label>
            <input class="input1" type="text" name="estado" value="<?php echo ($contato['estado']); ?>">
            <br>
            <input type="submit" value="Salvar">
        </fieldset>
</body>
</html>
