<?php
    $nota_um = 8;
    $nota_dois = 0;
    $nota_tres = 0;
    $media = ($nota_um + $nota_dois + $nota_tres) / 3;

    if($media <= 5){
        $mensagem = "Reprovado!";
        $classe = "reprovado"; 
    } elseif($media >= 6){
        $mensagem = "Aprovado!";
        $classe = "aprovado"; 
    } else {
        $mensagem = "Exame!";
        $classe = "exame"; 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas</title>
</head>
<body>
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
</body>
</html>

