<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questao_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
<div class="card text-bg-primary mb-3" style="max-width: 22rem;">
<div class="card-body">

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];
$linguagem = $_POST['linguagem'];
$areas = $_POST['areas'];

echo "<h2>Inscricao Confirmada</h2>";

echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Categoria: $categoria <br>";
echo "Linguagem: $linguagem <br>";

echo "<p><strong Areas de Interesse:</strong></p>";

echo "<ul>";

if (!empty($areas)) {
    foreach ($areas as $area) {
        echo "<li>$area</li>";
    }
} else {
    echo "<li>Nenhuma area selecionada</li>";
}

echo "</ul>";

echo "<div class='alert alert-success'>";
echo "Cadastro realizado com sucesso!";
echo "</div>";

?>

</div>
</div>
</div>

</body>
</html>