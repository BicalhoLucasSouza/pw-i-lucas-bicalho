<?php
include 'config/database.php';
include 'includes/header.php';

// Obtém o ID do contato da URL
$id = $_GET['id'];

// Prepara e executa a consulta
$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = :id");
$stmt->execute(['id' => $id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);


?>

    Wini essa é a parte do  html tem uma pasta CSS/style pode usar ela pra estilização, o header ta fazendo um include dessa pasta em todas paginas, mas nao sei se vai funcionar,
    então testa se nao for joga direto no html mesmo.
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
    <label>E-mail</label>
    <input type="text" value="<?php echo htmlspecialchars($contato['email']); ?>" readonly>
   
</div>

<br>
<br>

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

