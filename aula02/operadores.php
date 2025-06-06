<?php
//OPERADORES RELACIONAIS
//== COMPARAÇÃO
//!= DIFERENTE
// > MAIOR QUE
// >= MAIOR IGUAL QUE
// < MENOR QUE
// <= MENOR IGUAL QUE

$a = 10;
$b = 20;
$c = 10;

echo "Operadores Relacionais.<br>";

echo "A == C: ";
var_dump($a == $c);
echo "<br>";

echo "A > B: ";
var_dump($a > $b);
echo "<br>";

echo "A != B: ";
var_dump($a != $b);
echo "<br>";

//CONDIÇÕES SIMPLES E COMPOSTAS
$idade = 18;
// if condição se

if($idade >= 17){
    echo "Você é maior de Idade";
}else{
    echo "Você é menor de Idade";
}

//condição composta
$clima = "sol";

if($clima == "chuva"){
    echo "Leve um guarda-chuvas!";
}elseif($clima == "sol"){
    echo "Use protetor solar!";
}else{
    echo "Prepare-se para o tempo estavel ";
}

?>