<?php
$host = "localhost";
$db = "agenda";
$user = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}