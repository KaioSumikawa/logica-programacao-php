<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['acao'])) {
    $acao = $_GET['acao'] ?? '';

    // Usar filtro para dados e prevenir SQL injection via PDO já ajuda
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

    switch ($acao) {
        case 'cadastrar':
            if ($nome && $email && $telefone) {
                $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)");
                $stmt->execute([$nome, $email, $telefone]);
            }
            break;

        case 'editar':
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if ($id && $nome && $email && $telefone) {
                $stmt = $pdo->prepare("UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?");
                $stmt->execute([$nome, $email, $telefone, $id]);
            }
            break;

        case 'excluir':
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if ($id) {
                $stmt = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
                $stmt->execute([$id]);
            }
            break;
    }
    header('Location: pgcontato.php');
    exit();
}
?>