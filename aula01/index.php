<?php 
include "conexao.php"; 
include "includes/header.php";

$contatos = $pdo->query("SELECT * FROM contatos ORDER BY nome")->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Agenda de Contatos</h1>
<a href="adicionar.php" class="btn btn-success mb-3">Adicionar Contato</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contatos as $contato): ?>
      <tr>
        <td><?= $contato['id'] ?></td>
        <td><?= htmlspecialchars($contato['nome']) ?></td>
        <td><?= htmlspecialchars($contato['email']) ?></td>
        <td><?= htmlspecialchars($contato['telefone']) ?></td>
        <td>
          <a href="editar.php?id=<?= $contato['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
          <a href="opcontato.php?acao=excluir&id=<?= $contato['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include "includes/footer.php"; ?>
