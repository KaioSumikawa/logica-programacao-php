<?php
// Proteção básica para evitar erros se alguém acessar direto
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Recebendo e sanitizando os dados
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
$objetivo = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_SPECIAL_CHARS);
$graduacao = filter_input(INPUT_POST, 'graduacao', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário Recebido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 0 15px;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.4;
        }
        strong {
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Recebemos o Formulário</h1>
    <hr>
    <p><strong>Nome:</strong> <?= $nome ?: 'Não informado' ?></p>
    <p><strong>E-mail:</strong> <?= $email ?: 'Não informado' ?></p>
    <p><strong>Telefone:</strong> <?= $telefone ?: 'Não informado' ?></p>
    <p><strong>Endereço:</strong> <?= $endereco ?: 'Não informado' ?></p>
    <p><strong>Objetivo:</strong> <?= $objetivo ?: 'Não informado' ?></p>
    <p><strong>Graduação:</strong> <?= $graduacao ?: 'Não informado' ?></p>
    <hr>
    <a href="index.php?msg=ok">Voltar</a>
</body>
</html>