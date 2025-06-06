<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aula 3 - Estoque de Carros 🚗</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }
        h2 {
            color: #333;
        }
        .carro {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 6px rgba(0,0,0,0.1);
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .carro img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
        .info {
            font-size: 16px;
            color: #555;
        }
        .info strong {
            color: #222;
        }
    </style>
</head>
<body>

    <h2>Estoque de Carros</h2>

    <!-- Inclui a lista de carros e clientes -->
    <?php include 'clientes.php'; ?>

</body>
</html>