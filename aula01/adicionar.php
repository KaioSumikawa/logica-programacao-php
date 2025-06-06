<?php include "includes/header.php"; ?>

<h1>Adicionar Contato</h1>
<form action="opcontato.php?acao=cadastrar" method="post">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</form>

<?php include "includes/footer.php"; ?>