<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $profissao = $_POST['profissao'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    if (empty($nome) || empty($telefone) || empty($profissao) || empty($email) || empty($rua) || empty($numero) || empty($cidade) || empty($estado)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $sql = "INSERT INTO contatos (nome, telefone, profissao, email, rua, numero, cidade, estado) 
                VALUES ('$nome', '$telefone', '$profissao', '$email', '$rua', '$numero', '$cidade', '$estado')";

        try {
            if ($pdo->exec($sql)) {
                // Redireciona para list_contatos.php após o cadastro bem-sucedido
                header("Location: index.php");
                exit();
            } else {
                echo "Erro ao cadastrar o contato.";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>
