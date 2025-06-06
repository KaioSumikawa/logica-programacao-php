<?php include "includes/header.php"; ?>

<?php
// Operadores relacionais
$a = 10;
$b = 20;
$c = 10;
?>

<div class="caixa">
  <h2>Operadores Relacionais</h2>
  <p><strong>A = 10, B = 20, C = 10</strong></p>

  <ul>
    <li>A == C: <?= var_export($a == $c, true) ?></li>
    <li>A > B: <?= var_export($a > $b, true) ?></li>
    <li>A != B: <?= var_export($a != $b, true) ?></li>
  </ul>

  <?php
  // Condições simples e compostas
  $idade = 18;
  $clima = "sol";
  ?>

  <h3>Condicional if/else</h3>
  <p>Idade: <?= $idade ?> - 
  <?= ($idade >= 17) ? "Você é maior de idade." : "Você é menor de idade." ?></p>

  <h3>Condição composta (if/elseif/else)</h3>
  <p>Clima: <?= htmlspecialchars($clima) ?> - 
    <?php
      if ($clima === "chuva") {
          echo "Leve um guarda-chuva!";
      } elseif ($clima === "sol") {
          echo "Use protetor solar!";
      } else {
          echo "Prepare-se para o tempo estável.";
      }
    ?>
  </p>
</div>

<?php include "includes/footer.php"; ?>