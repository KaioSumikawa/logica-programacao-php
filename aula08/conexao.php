<?php
// conexao.php - conexão com banco usando PDO e tratamento de erros

$host = "localhost";
$db   = "agenda";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Configurar o PDO para lançar exceções em erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Logar erro e mostrar mensagem amigável
    error_log("Erro na conexão PDO: " . $e->getMessage());
    die("Erro ao conectar ao banco de dados. Tente novamente mais tarde.");
}
?>