<?php
session_start();

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;

echo "<!DOCTYPE html><html lang='pt-br'><head><meta charset='UTF-8'><title>Contador de Visitas</title></head><body>";
echo "<h1>Você visitou esta página <strong>" . $_SESSION['visitas'] . "</strong> vezes nesta sessão.</h1>";
echo "</body></html>";
?>