<?php

include "conexao.php";

if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
};

if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'cadastrar') {
        $insert = $pdo->prepare("INSERT INTO contatos (nome,email,telefone) VALUES (?,?,?)");
        $insert->bindValue(1, $nome);
        $insert->bindValue(2, $email);
        $insert->bindValue(3, $telefone);

        $insert->execute();

        header('Location: pgcontato.php');
    }

    if ($_GET['acao'] == "excluir") {
        $id = $_GET['id'];

        $delete = $pdo->prepare("DELETE FROM contatos WHERE id = ?");
        $delete->bindValue(1, $id);
        $delete->execute();

        header('Location: pgcontato.php');
    }

    if ($_GET['acao'] == "editar") {
        $id = $_GET['id'];

        $update = $pdo->prepare("UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?");
        $update->bindValue(1, $nome);
        $update->bindValue(2, $email);
        $update->bindValue(3, $telefone);
        $update->bindValue(4, $id);

        $update->execute();
        header('Location: pgcontato.php');
    }
}
