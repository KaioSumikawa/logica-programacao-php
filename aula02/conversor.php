<?php
    $cotacaoDolar= 5.5;
    $reais = 100;

    $conversao = $reais / $cotacaoDolar;

    echo "R$ ".number_format($reais,2)." equivale a US$ ". number_format($conversao,2);
?>

