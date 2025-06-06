<?php
$pessoa = [
    "nome" => "João",
    "idade" => 30,
    "cidade" => "São Paulo"
];

function apresentar($pessoa) {
    echo "Olá, meu nome é {$pessoa['nome']}, tenho {$pessoa['idade']} anos e moro em {$pessoa['cidade']}." . PHP_EOL;
}

apresentar($pessoa);
?>