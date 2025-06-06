<?php 
include "includes/header.php"; 

// Notas do aluno
$nota_um = 8;
$nota_dois = 0;
$nota_tres = 0;
$media = ($nota_um + $nota_dois + $nota_tres) / 3;

// Define resultado baseado na média
if ($media < 5) {
    $mensagem = "Reprovado!";
    $classe = "reprovado";
} elseif ($media >= 6) {
    $mensagem = "Aprovado!";
    $classe = "aprovado";
} else {
    $mensagem = "Exame!";
    $classe = "exame";
}
?>

<div class="caixa">
  <h2>Resultado do Aluno</h2>
  <p><strong>Nota 1:</strong> <?= $nota_um ?></p>
  <p><strong>Nota 2:</strong> <?= $nota_dois ?></p>
  <p><strong>Nota 3:</strong> <?= $nota_tres ?></p>
  <p><strong>Média:</strong> <?= number_format($media, 2, ',', '.') ?></p>

  <div class="resultado <?= $classe ?>">
    <?= $mensagem ?>
  </div>
</div>

<?php include "includes/footer.php"; ?>