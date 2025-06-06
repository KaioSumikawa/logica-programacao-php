<?php
// Inicia a sessão para mensagens flash se necessário
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 0 20px;
            background-color: #f4f4f4;
        }
        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            margin-top: 20px;
            padding: 10px 40px;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
// Exibe mensagens de erro, se existirem na sessão, e limpa
if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
    echo '<div class="error"><ul>';
    foreach ($_SESSION['errors'] as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo '</ul></div>';
    unset($_SESSION['errors']);
}

// Valores previamente enviados (para manter no formulário)
$old = $_SESSION['old'] ?? [];
unset($_SESSION['old']);
?>

<h1>Dados para Contato</h1>
<form action="processa.php" method="post" novalidate>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required value="<?php echo htmlspecialchars($old['nome'] ?? '') ?>">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($old['email'] ?? '') ?>">

    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required value="<?php echo htmlspecialchars($old['telefone'] ?? '') ?>">

    <input type="submit" value="Enviar">
</form>

</body>
</html>