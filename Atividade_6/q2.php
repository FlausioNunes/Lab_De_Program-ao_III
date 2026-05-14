<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questao_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<div class="card p-3">

<?php

$busca = $_GET['linguagem'] ?? '';

if ($busca == '') {

    echo "<div class='alert alert-warning'>";
    echo "Informe uma linguagem para realizar a busca.";
    echo "</div>";

} else {

    echo "<div class='alert alert-success'>";
    echo "Você pesquisou por: $busca";
    echo "</div>";

    $linguagens = ["python", "javascript", "php", "java"];

    if (in_array($busca, $linguagens)) {

        echo "<div class='alert alert-info'>";
        echo "Linguagem encontrada na base de dados!";
        echo "</div>";

    } else {

        echo "<div class='alert alert-danger'>";
        echo "Linguagem não encontrada.";
        echo "</div>";

    }
}

?>

</div>

</div>

</body>
</html>