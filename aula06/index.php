<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Odontológico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="receba.php" method="POST">
        <h2>Cadastro de Preferências Pessoais</h2>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label>Dentista</label>
        <div class="grupo">
            <input type="radio" name="dentista" value="Álvaro da Silva" id="dentista1">
            <label for="dentista1">Álvaro da Silva</label>

            <input type="radio" name="dentista" value="Silvia Martins" id="dentista2">
            <label for="dentista2">Silvia Martins</label>

            <input type="radio" name="dentista" value="Lucio Otávio" id="dentista3">
            <label for="dentista3">Lucio Otávio</label>
        </div>

        <label>Serviços</label>
        <div class="grupo">
            <input type="checkbox" name="servicos[]" value="Limpeza" id="servico1">
            <label for="servico1">Limpeza</label>

            <input type="checkbox" name="servicos[]" value="Clareamento" id="servico2">
            <label for="servico2">Clareamento</label>

            <input type="checkbox" name="servicos[]" value="Ortodontia" id="servico3">
            <label for="servico3">Ortodontia</label>

            <input type="checkbox" name="servicos[]" value="Prótese" id="servico4">
            <label for="servico4">Prótese</label>

            <input type="checkbox" name="servicos[]" value="Canal" id="servico5">
            <label for="servico5">Canal</label>
        </div>

        <label for="data">Data</label>
        <input type="date" name="data" id="data">

        <label for="hora_consulta">Hora da Consulta</label>
        <input type="time" name="hora_consulta" id="hora_consulta">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>