<?php
// Função para sanitizar a entrada e evitar XSS
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recebendo e sanitizando os dados
$nome = sanitize($_POST['nome'] ?? '');
$dentista = sanitize($_POST['dentista'] ?? '');
$servicos = $_POST['servicos'] ?? [];
$data = sanitize($_POST['data'] ?? '');
$hora = sanitize($_POST['hora_consulta'] ?? '');

// Validação simples
$errors = [];
if (empty($nome)) {
    $errors[] = "O campo Nome é obrigatório.";
}
if (empty($dentista)) {
    $errors[] = "Selecione um dentista.";
}
if (empty($data)) {
    $errors[] = "Selecione a data da consulta.";
}
if (empty($hora)) {
    $errors[] = "Selecione a hora da consulta.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dados do Agendamento</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos</h2>

        <?php if (!empty($errors)) : ?>
            <div class="errors" style="color: red;">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="index.php">Voltar ao formulário</a>
            </div>
        <?php else : ?>
            <p><strong>Nome:</strong> <?= $nome ?></p>
            <p><strong>Dentista:</strong> <?= $dentista ?></p>
            <p><strong>Serviços:</strong></p>
            <?php if (!empty($servicos)) : ?>
                <ul>
                    <?php foreach ($servicos as $servico) : ?>
                        <li><?= sanitize($servico) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>Nenhum serviço selecionado.</p>
            <?php endif; ?>
            <p><strong>Data:</strong> <?= $data ?></p>
            <p><strong>Hora da Consulta:</strong> <?= $hora ?></p>

            <a href="index.php" style="display:inline-block; margin-top:20px;">Agendar outra consulta</a>
        <?php endif; ?>
    </div>
</body>
</html>