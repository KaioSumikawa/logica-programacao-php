<?php include "includes/header.php"; ?>

<h1>Adicionar Contato</h1>

<form action="opcontato.php?acao=cadastrar" method="post">
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="index.php" class="btn btn-secondary">Voltar</a>
</form>

<?php include "includes/footer.php"; ?>