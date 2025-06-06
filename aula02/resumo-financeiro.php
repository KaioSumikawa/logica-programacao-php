<?php 
include "includes/header.php"; 

// Dados financeiros
$salario = 3000;
$aluguel = 1200;
$contas = 600;
$mes = "Maio";
$saldo = $salario - ($aluguel + $contas);
?>

<div class="caixa">
  <h2>Resumo Financeiro - <?= htmlspecialchars($mes) ?></h2>
  <p><strong>Salário:</strong> R$ <?= number_format($salario, 2, ',', '.') ?></p>
  <p><strong>Aluguel:</strong> R$ <?= number_format($aluguel, 2, ',', '.') ?></p>
  <p><strong>Contas:</strong> R$ <?= number_format($contas, 2, ',', '.') ?></p>
  <p><strong>Saldo:</strong> R$ <?= number_format($saldo, 2, ',', '.') ?></p>
</div>

<?php include "includes/footer.php"; ?>