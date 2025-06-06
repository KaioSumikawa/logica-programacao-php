<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include "menu.php"; ?>

    <div class="container">
        <h2>Gerenciamento de Contato</h2>
        <!-- Modal adicionar -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAdicionar">
            Adicionar Contato +
        </button>

        <!-- Modal adicionar início -->
        <div class="modal fade" id="ModalAdicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Contato</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="opcontato.php?acao=cadastrar" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal adicionar fim -->
        <div class="mt-5">
            <h4>Lista de Contatos</h4>
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
                    $lista = $pdo->query("SELECT * FROM contatos ORDER BY nome");
                    while ($linha = $lista->fetch()) { ?>
                        <tr>
                            <td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['nome']; ?></td>
                            <td><?php echo $linha['email']; ?></td>
                            <td><?php echo $linha['telefone']; ?></td>
                            <td>
                                <!-- Modal editar -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar<?php echo $linha['id']; ?>">
                                    Editar
                                </button>

                                <!-- Modal adicionar início -->
                                <div class="modal fade" id="ModalEditar<?php echo $linha['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edição de Contato</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="opcontato.php?acao=editar&id=<?php echo $linha['id']; ?>" method="post">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nome</label>
                                                        <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">E-mail</label>
                                                        <input type="email" class="form-control" name="email value=" <?php echo $linha['email']; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Telefone</label>
                                                        <input type="text" class="form-control" name="telefone value=" <?php echo $linha['telefone']; ?>">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal adicionar fim -->

                                <a href="opcontato.php?acao=excluir&id=<?php echo $linha['id']; ?>" onclick="return confirm('Tem certeza?')" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>

                    <?php
                    };
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>