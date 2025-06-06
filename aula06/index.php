<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agendamento Odontológico 🦷</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="receba.php" method="POST" novalidate>
        <h2>Agendamento Odontológico</h2>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required placeholder="Seu nome completo" />

        <fieldset>
            <legend>Dentista</legend>
            <label><input type="radio" name="dentista" value="Álvaro da Silva" required /> Álvaro da Silva</label>
            <label><input type="radio" name="dentista" value="Silvia Martins" /> Silvia Martins</label>
            <label><input type="radio" name="dentista" value="Lucio Otávio" /> Lucio Otávio</label>
        </fieldset>

        <fieldset>
            <legend>Serviços</legend>
            <label><input type="checkbox" name="servicos[]" value="Limpeza" /> Limpeza</label>
            <label><input type="checkbox" name="servicos[]" value="Clareamento" /> Clareamento</label>
            <label><input type="checkbox" name="servicos[]" value="Ortodontia" /> Ortodontia</label>
            <label><input type="checkbox" name="servicos[]" value="Prótese" /> Prótese</label>
            <label><input type="checkbox" name="servicos[]" value="Canal" /> Canal</label>
        </fieldset>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required />

        <label for="hora_consulta">Hora da Consulta:</label>
        <input type="time" name="hora_consulta" id="hora_consulta" required />

        <button type="submit" style="margin-top: 15px; padding: 10px 20px; cursor: pointer;">Enviar</button>
    </form>
</body>
</html>