<?php
include 'config/database.php';
include 'includes/header.php';

// Consulta todos os contatos do banco de dados
$stmt = $pdo->query("SELECT id, nome, email FROM contatos");
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
    <head>
    <link rel="stylesheet" href="css/list.css"> 
    </head>
    <body>
<br><br><br>
<table border="5%"style="width: 50%">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($contatos as $contato): ?>
        <tr>
            <td><?php echo htmlspecialchars($contato['nome']); ?></td>
            <td><?php echo htmlspecialchars($contato['email']); ?></td>
            <td class="td1">
                <a href="view_contato.php?id=<?php echo $contato['id']; ?>"><img src="images/vermais.png" width="20px" height="20px"></a>
            </td>
            <td class="td1">
                <a href="edit_contato.php?id=<?php echo $contato['id']; ?>"><img src="images/editar.png" width="20px" height="20px"></a>
            </td>
            <td class="td1"> 
            <a href="deletar_contato.php?id=<?php echo $contato['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este contato?');"><img src="images/deletar.png" width="20px" height="20px"></a>
    </td>

            
        </tr>
    <?php endforeach; ?>
</table>

    

    </body>
    </html>


