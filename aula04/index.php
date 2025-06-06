<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Preferências</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="receber.php" method="POST">
        <h2>Cadastro de Preferências Pessoais</h2>
        <label>Nome</label>
        <input type="text" name="nome">

        <label>Sexo</label>
        <div class="grupo">
            <input type="radio" name="sexo" value="Masculino">Masculino
            <input type="radio" name="sexo" value="Feminino">Feminino
        </div>

        <label>Serviços que assina</label>
        <div class="grupo">
            <input type="checkbox" name="servicos[]" value="Netflix">Netflix
            <input type="checkbox" name="servicos[]" value="Prime Video"> Prime Video
            <input type="checkbox" name="servicos[]" value="Disney+"> Disney+
            <input type="checkbox" name="servicos[]" value="HBO"> HBO
        </div>

        <label>Estado</label>
        <select name="estado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="PR">PR</option>
        </select>

        <label>Data de Nascimento</label>
        <input type="date" name="nascimento">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>