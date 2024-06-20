<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $profissao = $_POST['profissao'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // Atualiza os dados do contato no banco de dados
    $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone, profissao = :profissao, email = :email, rua = :rua, numero = :numero, cidade = :cidade, estado = :estado WHERE id = :id";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':profissao' => $profissao,
            ':email' => $email,
            ':rua' => $rua,
            ':numero' => $numero,
            ':cidade' => $cidade,
            ':estado' => $estado
        ]);

        // Redireciona para a página de detalhes do contato após a atualização
        header("Location: edit_contato.php?id=" . $id);
        exit();
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>