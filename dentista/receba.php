<?php
$nome = $_POST['nome'];
$dentista = $_POST['dentista'];
$servicos = $_POST['servicos'];
$data = $_POST['data'];
$hora = $_POST['hora_consulta'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
    <div class="grupo">
    <h2>Dados Recebidos</h2>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p> 
    <p><strong>Dentista:</strong> <?php echo htmlspecialchars($dentista); ?></p> 
    <p><strong>Serviços:</strong></p>
    <ul>
        <?php
            foreach ($servicos as $servico) {
                echo "<li>" . htmlspecialchars($servico) . "</li>";
            }
        ?>
    </ul>
    <p><strong>Data:</strong> <?php echo htmlspecialchars($data); ?></p> 
    <p><strong>Hora da Consulta:</strong> <?php echo htmlspecialchars($hora); ?></p> 
        </div> </form>
</body>
</html>