<?php
$salario = 3000;
$aluguel = 1200;
$contas = 600;
$mes = "Maio";
$saldo = $salario - ($aluguel + $contas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 de Lógica de Programação</title>
    
    <style>
        body{font-family: Arial; background: #f4f4f4;
        padding: 20px;}
        .caixa{background: white; padding: 20px; border-radius: 8px;}
    </style>

</head>
<body>

    <div class="caixa">
        <h2>Resumo Financeiro</h2>
        <p><strong>Salário: R$ <?php echo $salario;?></strong></p>
        <p><strong>Aluguel: R$ <?php echo $aluguel;?></strong></p>
         <p><strong>Contas: R$ <?php echo $contas;?></strong></p>
          <p><strong>Mês: R$ <?php echo $mes;?></strong></p>
           <p><strong>Saldo: R$ <?php echo $saldo;?></strong></p>

</body>
</html>