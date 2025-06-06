<?php include "conexao.php"; ?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Agenda de Contatos</h1>
    <a href="adicionar.php" class="btn btn-success mb-3">Adicionar contato</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $lista = $pdo->query("SELECT * FROM contatos ORDER BY nome");
        while($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['email'] ?></td>
            <td><?= $linha['telefone'] ?></td>
            <td>
              <a href="editar.php?id=<?= $linha['id'] ?>" class="btn btn-warning">Editar</a>
              <a href="opcontato.php?acao=excluir&id=<?= $linha['id'] ?>" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
