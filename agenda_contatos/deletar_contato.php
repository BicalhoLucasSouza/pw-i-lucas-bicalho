<?php
include 'config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para excluir o contato
    $sql = "DELETE FROM contatos WHERE id = :id";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        // Redireciona para a página de listagem de contatos após a exclusão
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>