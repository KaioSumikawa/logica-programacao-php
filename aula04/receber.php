<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$servicos = $_POST['servicos'];
$estado = $_POST['estado'];
$nascimento = $_POST['nascimento'];
$dtnascimento = date("d/m/Y", strtotime($nascimento));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dados Recebidos</h2>
    <p><strong>Nome:</strong> <?php echo $nome;?></p> 
    <p><strong>Sexo:</strong> <?php echo $sexo;?></p> 
    <p><strong>Serviços assinados:</strong>
    <ul>
        <?php
            foreach($servicos as $servico){
                echo "<li>". htmlspecialchars($servico)."</li>";
            }
        ?>
    </ul>
</p> 
    <p><strong>Estado:</strong> <?php echo $estado;?></p> 
    <p><strong>Data de Nascimento:</strong> <?php echo $nascimento;?></p> 
</body>
</html>