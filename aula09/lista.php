<?php
session_start();

if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = [];
}

if (isset($_POST['item']) && trim($_POST['item']) !== '') {
    $_SESSION['lista'][] = trim($_POST['item']);
}

if (isset($_GET['remover'])) {
    $index = intval($_GET['remover']);
    if (isset($_SESSION['lista'][$index])) {
        unset($_SESSION['lista'][$index]);
        $_SESSION['lista'] = array_values($_SESSION['lista']); // reindexa
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Itens</title>
</head>
<body>
    <h1>Minha Lista</h1>
    <form method="post">
        <input type="text" name="item" placeholder="Novo item" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['lista'] as $i => $item): ?>
            <li><?= htmlspecialchars($item) ?> <a href="?remover=<?= $i ?>" onclick="return confirm('Remover este item?')">[x]</a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>