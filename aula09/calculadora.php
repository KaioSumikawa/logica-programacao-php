<?php
$resultado = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'somar':
            $resultado = $num1 + $num2;
            break;
        case 'subtrair':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero!";
            break;
        default:
            $resultado = "Operação inválida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples PHP</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post">
        <input type="number" step="any" name="num1" required placeholder="Número 1" value="<?= isset($num1) ? htmlspecialchars($num1) : '' ?>">
        <select name="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="number" step="any" name="num2" required placeholder="Número 2" value="<?= isset($num2) ? htmlspecialchars($num2) : '' ?>">
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h2>Resultado: <?= is_numeric($resultado) ? number_format($resultado, 2, ',', '.') : $resultado ?></h2>
    <?php endif; ?>
</body>
</html>