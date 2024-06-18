<?php
include 'config/database.php';
include 'includes/header.php';

// Consulta todos os contatos do banco de dados
$stmt = $pdo->query("SELECT id, nome, email FROM contatos");
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Lista de Contatos</h1>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($contatos as $contato): ?>
        <tr>
            <td><?php echo htmlspecialchars($contato['nome']); ?></td>
            <td><?php echo htmlspecialchars($contato['email']); ?></td>
            <td>
                <a href="view_contato.php?id=<?php echo $contato['id']; ?>">Ver mais</a>
            </td>
            
        </tr>
    <?php endforeach; ?>
</table>


    <button type="button">
    <a href="add_contato.php?id=<?php echo $contato['id']; ?>">Adicionar</a>
    </button>


