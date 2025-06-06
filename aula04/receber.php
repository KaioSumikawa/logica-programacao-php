<?php
// Recebe dados do formulário com segurança
$nome = htmlspecialchars($_POST['nome'] ?? '');
$sexo = htmlspecialchars($_POST['sexo'] ?? '');
$servicos = $_POST['servicos'] ?? [];
$estado = htmlspecialchars($_POST['estado'] ?? '');
$nascimento = $_POST['nascimento'] ?? '';
$dataFormatada = date("d/m/Y", strtotime($nascimento));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #eef; }
        .caixa { background: white; padding: 20px; border-radius: 10px; max-width: 500px; margin: 0 auto; }
        ul { padding-left: 20px; }
    </style>
</head>
<body>
    <div class="caixa">
        <h2>Dados Recebidos</h2>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Sexo:</strong> <?= $sexo ?></p>
        <p><strong>Serviços Assinados:</strong></p>
        <ul>
            <?php foreach ($servicos as $servico): ?>
                <li><?= htmlspecialchars($servico) ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Estado:</strong> <?= $estado ?></p>
        <p><strong>Data de Nascimento:</strong> <?= $dataFormatada ?></p>
    </div>
</body>
</html>