<?php 
include "includes/header.php"; 

$cotacaoDolar = 5.5;
$reais = 100;
$conversao = $reais / $cotacaoDolar;
?>

<div class="caixa">
  <h2>Conversão de Moeda</h2>
  <p>R$ <?= number_format($reais, 2, ',', '.') ?> equivale a <strong>US$ <?= number_format($conversao, 2, '.', '') ?></strong></p>
</div>

<?php include "includes/footer.php"; ?>