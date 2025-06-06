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

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>

        <label>Sexo</label>
        <div class="grupo">
            <input type="radio" name="sexo" value="Masculino" id="sexo_m" required><label for="sexo_m">Masculino</label>
            <input type="radio" name="sexo" value="Feminino" id="sexo_f"><label for="sexo_f">Feminino</label>
        </div>

        <label>Serviços que assina</label>
        <div class="grupo">
            <input type="checkbox" name="servicos[]" value="Netflix" id="netflix"><label for="netflix">Netflix</label>
            <input type="checkbox" name="servicos[]" value="Prime Video" id="prime"><label for="prime">Prime Video</label>
            <input type="checkbox" name="servicos[]" value="Disney+" id="disney"><label for="disney">Disney+</label>
            <input type="checkbox" name="servicos[]" value="HBO" id="hbo"><label for="hbo">HBO</label>
        </div>

        <label for="estado">Estado</label>
        <select name="estado" id="estado" required>
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="PR">PR</option>
        </select>

        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" id="nascimento" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>