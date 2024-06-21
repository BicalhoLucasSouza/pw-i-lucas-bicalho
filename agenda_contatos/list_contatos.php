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

<h1>Lista de Contatos</h1>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    <?php foreach ($contatos as $contato): ?>
        <tr>
            <td><?php echo htmlspecialchars($contato['nome']); ?></td>
            <td><?php echo htmlspecialchars($contato['email']); ?></td>
            <td>
                <a href="view_contato.php?id=<?php echo $contato['id']; ?>">Ver mais</a>
            </td>
            <td>
                <a href="edit_contato.php?id=<?php echo $contato['id']; ?>">Editar</a>
            </td>
            <td>
            <a href="deletar_contato.php?id=<?php echo $contato['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir este contato?');">Excluir</a>
    </td>

            
        </tr>
    <?php endforeach; ?>
</table>


    <button type="button">
    <a href="add_contato.php?id=<?php echo $contato['id']; ?>">Adicionar</a>
    </button>
    

    </body>
    </html>


