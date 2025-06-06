<?php
//variáveis do tipo ARRAY
$carros = ["CIVIC G10", "AMAROK", "GM CRUZE"];
//echo $carros[1];
//var_dump($carros);

$carro = [  
    "modelo"    => "CIVIC G10",
    "cor"       => "BRANCO", 
    "marca"     => "HONDA",
    "ano"       => 2020
];

//echo $carro["modelo"];
//var_dump($carro);
$estoque = [
    ["modelo" => "CIVIC G10", "cor" => "BRANCO", "marca" => "HONDA", "foto" => "01.jpg"],
    ["modelo" => "AMAROK", "cor" => "AZUL", "marca" => "VOLKSWAGEM", "foto" => "02.jpg"],
    ["modelo" => "GM CRUZE", "cor" => "VERMELHO", "marca" => "GM", "foto" => "03.jpg"],
];

foreach($estoque as $item){
    echo "<img src ='".$item['foto']."'><strong>MODELO: </strong>".$item['modelo']." - <strong>COR: </strong>".$item['cor']." -  <strong>MARCA: </strong>".$item['marca']."<br>";
}

?>      