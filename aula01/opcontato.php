<?php
include "conexao.php";

$acao = $_GET['acao'] ?? '';
$id = $_POST['id'] ?? $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if ($acao === 'cadastrar') {
        $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)");
        $stmt->execute([$nome, $email, $telefone]);
    }

    if ($acao === 'editar' && $id) {
        $stmt = $pdo->prepare("UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?");
        $stmt->execute([$nome, $email, $telefone, $id]);
    }

    header("Location: index.php");
    exit;
}

if ($acao === 'excluir' && $id) {
    $stmt = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
    exit;
}