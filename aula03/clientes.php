<?php
$clientes = ["KAIO", "FELIPE", "FABIANO", "HUGO", "GABRIELA"];

$cliente = [
    "nome" => "KAIO",
    "sobrenome" => "TOSHIYUKI",
    "email" => "nome@hotmail.com"
];

$estoque = [
    ["nome" => "KAIO", "sobrenome" => "TOSHIYUKI", "email" => "kaiotoshiyuki@hotmail.com", "foto" => "humano1.jpg"],
    ["nome" => "FELIPE", "sobrenome" => "CUNHA", "email" => "felipecunha@hotmail.com", "foto" => "humano2.jpg"],
    ["nome" => "FABIANO", "sobrenome" => "PROFESSOR", "email" => "fabianoprofessor@hotmail.com", "foto" => "humano3.jpg"],
    ["nome" => "HUGO", "sobrenome" => "MELO", "email" => "hugomelo@hotmail.com", "foto" => "humano4.jpg"],
    ["nome" => "GABRIELA", "sobrenome" => "SHIMODA", "email" => "gabrielashimoda@hotmail.com", "foto" => "humano5.jpg"],
];

foreach($estoque as $item){
    echo "
    <div style='margin-bottom: 20px;'>
        <img src='{$item['foto']}' alt='{$item['nome']}' style='width:100px; height:auto;'><br>
        <strong>Nome:</strong> {$item['nome']}<br>
        <strong>Sobrenome:</strong> {$item['sobrenome']}<br>
        <strong>Email:</strong> {$item['email']}<br>
    </div>
    ";
}
?>