<?php
include 'config/database.php';
include 'includes/header.php';
?>

<body>
<form method="post" action="cadastro.php">
<label>Nome:</label><input type="text" name="nome" id="nome"><br>
<label>Numero:</label><input type="text" name="numero" id="numero"><br>
<label>Profissão:</label><input type="text" name="profissao" id="profissao"><br>
<label>E-mail:</label><input type="text" name="email" id="email"><br>
<label>Rua:</label><input type="text" name="rua" id="rua"><br>
<label>Numero:</label><input type="text" name="numero" id="numero"><br>
<input type="submit">
</form>
</body>