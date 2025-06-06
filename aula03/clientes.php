<?php
$estoqueCarros = [
    ["modelo" => "CIVIC G10", "cor" => "BRANCO", "marca" => "HONDA", "foto" => "01.jpg"],
    ["modelo" => "AMAROK", "cor" => "AZUL", "marca" => "VOLKSWAGEM", "foto" => "02.jpg"],
    ["modelo" => "GM CRUZE", "cor" => "VERMELHO", "marca" => "GM", "foto" => "03.jpg"],
];

foreach ($estoqueCarros as $carro) {
    echo '<div class="carro">';
    echo '<img src="' . htmlspecialchars($carro['foto']) . '" alt="' . htmlspecialchars($carro['modelo']) . '">';
    echo '<div class="info">';
    echo '<p><strong>Modelo:</strong> ' . htmlspecialchars($carro['modelo']) . '</p>';
    echo '<p><strong>Cor:</strong> ' . htmlspecialchars($carro['cor']) . '</p>';
    echo '<p><strong>Marca:</strong> ' . htmlspecialchars($carro['marca']) . '</p>';
    echo '</div>';
    echo '</div>';
}
?>