<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['acao'])) {
    $acao = $_GET['acao'] ?? '';

    $razao = filter_input(INPUT_POST, 'razao', FILTER_SANITIZE_STRING);
    $fantasia = filter_input(INPUT_POST, 'fantasia', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

    switch ($acao) {
        case 'cadastrar':
            if ($razao && $fantasia && $endereco && $email && $telefone) {
                $stmt = $pdo->prepare("INSERT INTO fornecedores (razao, fantasia, endereco, email, telefone) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$razao, $fantasia, $endereco, $email, $telefone]);
            }
            break;

        case 'editar':
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if ($id && $razao && $fantasia && $endereco && $email && $telefone) {
                $stmt = $pdo->prepare("UPDATE fornecedores SET razao = ?, fantasia = ?, endereco = ?, email = ?, telefone = ? WHERE id = ?");
                $stmt->execute([$razao, $fantasia, $endereco, $email, $telefone, $id]);
            }
            break;

        case 'excluir':
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if ($id) {
                $stmt = $pdo->prepare("DELETE FROM fornecedores WHERE id = ?");
                $stmt->execute([$id]);
            }
            break;
    }
    header('Location: pgfornecedor.php');
    exit();
}
?>