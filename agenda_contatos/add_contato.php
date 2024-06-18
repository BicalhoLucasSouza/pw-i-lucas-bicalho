<?php
include 'config/database.php';
include 'includes/header.php';
?>

<body>
<form method="post" action="cadastro.php">
<label>Nome:</label><input type="text" name="nome" id="nome"><br>
<label>Telefone:</label><input type="text" name="telefone" id="telefone"><br>
<label>Profissão:</label><input type="text" name="profissao" id="profissao"><br>
<label>E-mail:</label><input type="text" name="email" id="email"><br>
<label>Rua:</label><input type="text" name="rua" id="rua"><br>
<label>Numero Rua:</label><input type="text" name="numero" id="numero"><br>
<label>Cidade:</label><input type="text" name="cidade" id="cidade"><br>
<label>Estado:</label><input type="text" name="estado" id="estado"><br>

<input type="submit" value="Cadastrar">
</form>
</body>