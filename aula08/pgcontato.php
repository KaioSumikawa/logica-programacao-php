<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Gerenciamento de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <?php include "menu.php"; ?>

    <div class="container mt-4">
        <h2>Gerenciamento de Contato</h2>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#ModalAdicionar">Adicionar Contato +</button>

        <!-- Modal Adicionar -->
        <div class="modal fade" id="ModalAdicionar" tabindex="-1" aria-labelledby="ModalAdicionarLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form action="opcontato.php?acao=cadastrar" method="post" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalAdicionarLabel">Cadastro de Contato</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label class="form-label">Nome</label>
                      <input type="text" name="nome" class="form-control" required />
                  </div>
                  <div class="mb-3">
                      <label class="form-label">E-mail</label>
                      <input type="email" name="email" class="form-control" required />
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Telefone</label>
                      <input type="text" name="telefone" class="form-control" required />
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Lista Contatos -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->query("SELECT * FROM contatos ORDER BY nome");
                while ($contato = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>
                <tr>
                    <td><?= htmlspecialchars($contato['id']) ?></td>
                    <td><?= htmlspecialchars($contato['nome']) ?></td>
                    <td><?= htmlspecialchars($contato['email']) ?></td>
                    <td><?= htmlspecialchars($contato['telefone']) ?></td>
                    <td>
                        <!-- Botão editar -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?= $contato['id'] ?>">Editar</button>

                        <!-- Modal Editar -->
                        <div class="modal fade" id="ModalEditar<?= $contato['id'] ?>" tabindex="-1" aria-labelledby="ModalEditarLabel<?= $contato['id'] ?>" aria-hidden="true">
                          <div class="modal-dialog">
                            <form action="opcontato.php?acao=editar&id=<?= $contato['id'] ?>" method="post" class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="ModalEditarLabel<?= $contato['id'] ?>">Editar Contato</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="mb-3">
                                      <label class="form-label">Nome</label>
                                      <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($contato['nome']) ?>" required />
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label">E-mail</label>
                                      <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($contato['email']) ?>" required />
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label">Telefone</label>
                                      <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($contato['telefone']) ?>" required />
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                              </div>
                            </form>
                          </div>
                        </div>

                        <a href="opcontato.php?acao=excluir&id=<?= $contato['id']