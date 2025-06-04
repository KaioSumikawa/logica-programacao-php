<?php
include "conexao.php";

if ($_POST) {

    $razao = $_POST['razao'] ?? '';
    $fantasia = $_POST['fantasia'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
}

if (isset($_GET['acao'])) {
   
    if ($_GET['acao'] == 'cadastrar') {
        $insert = $pdo->prepare("INSERT INTO fornecedores (razao, fantasia, endereco, email, telefone) VALUES (?, ?, ?, ?, ?)");
        $insert->bindValue(1, $razao);
        $insert->bindValue(2, $fantasia);
        $insert->bindValue(3, $endereco);
        $insert->bindValue(4, $email);
        $insert->bindValue(5, $telefone);
        $insert->execute();

 
        header('Location: pgfornecedor.php');
    }


    if ($_GET['acao'] == "excluir") {
        $id = $_GET['id'];
        $delete = $pdo->prepare("DELETE FROM fornecedores WHERE id = ?");
        $delete->bindValue(1, $id);
        $delete->execute();

    
        header('Location: pgfornecedor.php');
    }


    if ($_GET['acao'] == "editar") {
        $id = $_GET['id'];
        $update = $pdo->prepare("UPDATE fornecedores SET razao = ?, fantasia = ?, endereco = ?, email = ?, telefone = ? WHERE id = ?");
        $update->bindValue(1, $razao);
        $update->bindValue(2, $fantasia);
        $update->bindValue(3, $endereco);
        $update->bindValue(4, $email);
        $update->bindValue(5, $telefone);
        $update->bindValue(6, $id);
        $update->execute();


        header('Location: pgfornecedor.php');
    }
}
?>