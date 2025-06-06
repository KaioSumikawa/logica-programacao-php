<?php
if (isset($_GET['msg']) && $_GET['msg'] === "ok") {
    echo "<h1 style='color: green; text-align: center;'>✅ Dados enviados com sucesso!</h1>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulários com PHP 📋</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 0 15px;
            background-color: #fafafa;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            margin-top: 20px;
            padding: 12px 50px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #222;
        }
    </style>
</head>
<body>
    <h1>Dados para Contato 📞</h1>
    <form action="recebimento.php" method="post" autocomplete="off" novalidate>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="objetivo">Objetivo:</label>
        <input type="text" id="objetivo" name="objetivo">

        <label for="graduacao">Graduação:</label>
        <input type="text" id="graduacao" name="graduacao">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>