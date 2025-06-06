<?php
include "conexao.php";

if (!isset($_GET['id'])) {
    echo "ID não informado.";
    exit;
}

$id = $_GET['id'];

$sql = $pdo->prepare("SELECT * FROM contatos WHERE id = ?");
$sql->execute([$id]);

$linha = $sql->fetch(PDO::FETCH_ASSOC);

if (!$linha) {
    echo "Contato não encontrado.";
    exit;
}
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Editar Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1>Editar Contato</h1>
    <form action="opcontato.php?acao=editar" method="post">
      <input type="hidden" name="id" value="<?= $linha['id'] ?>">

      <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required value="<?= htmlspecialchars($linha['nome']) ?>">
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required value="<?= htmlspecialchars($linha['email']) ?>">
      </div>
      <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control" required value="<?= htmlspecialchars($linha['telefone']) ?>">
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
      <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
  </div>
</body>
</html>
