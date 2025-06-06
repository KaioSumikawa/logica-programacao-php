<?php
// Simula um banco de dados com um array (só para estudo)
$tarefas = [
    ["id" => 1, "descricao" => "Estudar PHP"],
    ["id" => 2, "descricao" => "Fazer exercícios"],
    ["id" => 3, "descricao" => "Revisar conceitos"],
];

// Adiciona nova tarefa (simulado via GET para exemplo)
if (isset($_GET['nova'])) {
    $novaDescricao = trim($_GET['nova']);
    if ($novaDescricao !== '') {
        $novoId = end($tarefas)['id'] + 1;
        $tarefas[] = ["id" => $novoId, "descricao" => $novaDescricao];
        // Redireciona para evitar reenvio no refresh
        header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
        exit;
    }
}

echo "<!DOCTYPE html>";
echo "<html lang='pt-br'>";
echo "<head><meta charset='UTF-8'><title>Lista de Tarefas - PHP puro</title></head>";
echo "<body>";
echo "<h1>Minha Lista de Tarefas</h1>";

// Formulário para adicionar tarefa
echo "<form method='get'>";
echo "<input type='text' name='nova' placeholder='Nova tarefa' required>";
echo "<button type='submit'>Adicionar</button>";
echo "</form>";

echo "<ul>";
foreach ($tarefas as $tarefa) {
    echo "<li>" . htmlspecialchars($tarefa['descricao']) . "</li>";
}
echo "</ul>";

echo "</body></html>";
?>