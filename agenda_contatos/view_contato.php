<?php
include 'config/database.php';
include 'includes/header.php';

// Obtém o ID do contato da URL
$id = $_GET['id'];

// Prepara e executa a consulta
$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt->execute(['id' => $id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$contato) {
    echo "<p>Contato não encontrado.</p>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="profile">
    <img src="images/contato.jpg" alt="Foto do contato" width="100">
    <div class="profile-details">
        <h2><?php echo htmlspecialchars($contato['nome']); ?></h2>
    </div>
</div>

<div class="info">
    <label>Número</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['telefone']); ?>" readonly>
    <label>Profissão</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['profissao']); ?>" readonly>
</div>

<div class="address">
    <label>Rua</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['rua']); ?>" readonly>
    <label>Número</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['numero']); ?>" readonly>
    <label>Cidade</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['cidade']); ?>" readonly>
    <label>Estado</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['estado']); ?>" readonly>
</div>



<?php include 'includes/footer.php'; ?>
