<?php
// Função que soma dois números
function somar($a, $b) {
    return $a + $b;
}

// Função que verifica se um número é par
function ehPar($num) {
    return $num % 2 === 0;
}

// Exemplo de uso
echo "Soma de 5 e 3: " . somar(5, 3) . PHP_EOL;
echo "O número 10 é par? " . (ehPar(10) ? "Sim" : "Não") . PHP_EOL;
echo "O número 7 é par? " . (ehPar(7) ? "Sim" : "Não") . PHP_EOL;
?>