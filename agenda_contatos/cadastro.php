<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $profissao = $_POST['profissao'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero_rua = $_POST['numero_rua'];

    // Verifica se todos os campos estão preenchidos
    if (empty($nome) || empty($numero) || empty($profissao) || empty($email) || empty($rua) || empty($numero_rua)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Cria a consulta SQL
        $sql = "INSERT INTO contatos (nome, numero, profissao, email, rua, numero_rua) VALUES (:nome, :numero, :profissao, :email, :rua, :numero_rua)";
        
        try {
            $stmt = $pdo->prepare($sql);

            // Vincula os parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':profissao', $profissao);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':rua', $rua);
            $stmt->bindParam(':numero_rua', $numero_rua);

            // Executa a consulta
            if ($stmt->execute()) {
                echo "Contato cadastrado com sucesso.";
            } else {
                echo "Erro ao cadastrar o contato.";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>
