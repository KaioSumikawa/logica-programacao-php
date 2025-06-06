<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Adicionar Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
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
  </div>
</body>
</html>
