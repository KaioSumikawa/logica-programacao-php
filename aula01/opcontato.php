<?php
include "conexao.php";

// Cadastrar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['acao'] == "cadastrar") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?)";
    $insert = $pdo->prepare($sql);
    $insert->execute([$nome, $email, $telefone]);

    header("Location: index.php");
    exit;
}

// Editar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['acao'] == "editar") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?";
    $editar = $pdo->prepare($sql);
    $editar->execute([$nome, $email, $telefone, $id]);

    header("Location: index.php");
    exit;
}

// Excluir
if (isset($_GET['acao']) && $_GET['acao'] == "excluir") {
    $id = $_GET['id'];

    $delete = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
    $delete->execute([$id]);

    header("Location: index.php");
    exit;
}
?>