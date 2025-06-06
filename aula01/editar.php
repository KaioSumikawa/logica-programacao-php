<?php
include "conexao.php";
$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID não informado.");
}

$stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = ?");
$stmt->execute([$id]);
$contato = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$contato) {
    die("Contato não encontrado.");
}

include "includes/header.php";
?>

<h1>Editar Contato</h1>
<form action="opcontato.php?acao=editar" method="post">
  <input type="hidden" name="id" value="<?= $contato['id'] ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required value="<?= htmlspecialchars($contato['nome']) ?>">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required value="<?= htmlspecialchars($contato['email']) ?>">
  </div>
  <div class="mb-3">
    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control" required value="<?= htmlspecialchars($contato['telefone']) ?>">
  </div>
  <button type="submit" class="btn btn-primary">Atualizar</button>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</form>

<?php include "includes/footer.php"; ?>