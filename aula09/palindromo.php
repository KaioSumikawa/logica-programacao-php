<?php
$palavra = $_GET['palavra'] ?? '';
$mensagem = '';

if ($palavra !== '') {
    $limpa = preg_replace("/[^a-z0-9]/i", "", strtolower($palavra));
    $reverso = strrev($limpa);

    if ($limpa === $reverso) {
        $mensagem = "A palavra \"$palavra\" é um palíndromo!";
    } else {
        $mensagem = "A palavra \"$palavra\" NÃO é um palíndromo.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Palíndromo</title>
</head>
<body>
    <h1>Verificador de Palíndromo</h1>
    <form method="get">
        <input type="text" name="palavra" placeholder="Digite uma palavra" value="<?= htmlspecialchars($palavra) ?>" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($mensagem !== ''): ?>
        <p><strong><?= $mensagem ?></strong></p>
    <?php endif; ?>
</body>
</html>