<?php
include 'config/database.php';
include 'includes/header.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="css/cadastro.css"> 
    </head>
    <body>
        
        <fieldset class="fieldset" method="post" action="cadastro.php">
            <label class="label1">Nome:</label>
            <input class="input1" type="text" name="nome" id="nome"><br>
            <br>
            <label class="label1">Telefone:</label>
            <input class="input1" type="text" name="telefone" id="telefone"><br>
            <br>
            <label class="label1">Profissão:</label>
            <input class="input1" type="text" name="profissao" id="profissao"><br>
            <br>
            <label class="label1">E-mail:</label>
            <input class="input1" type="text" name="email" id="email"><br>
            <br>
            <label class="label1">Rua:</label>
            <input class="input1" type="text" name="rua" id="rua"><br>
            <br>
            <label class="label1">Numero Rua:</label>
            <input class="input1" type="text" name="numero" id="numero"><br>
            <br>
            <label class="label1">Cidade:</label>
            <input class="input1" type="text" name="cidade" id="cidade"><br>
            <br>
            <label class="label1">Estado:</label>
            <input class="input1" type="text" name="estado" id="estado"><br>
            <br>

            <input class="button" type="submit" value="Cadastrar">
        </fieldset >
    </body>
</html>