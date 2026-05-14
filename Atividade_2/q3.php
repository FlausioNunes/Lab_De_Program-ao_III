<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado do Desconto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2>Resultado da Compra</h2>

<?php

$valor = floatval($_POST['valor']);
$categoria = $_POST['categoria'];

$desconto = 0;
$frete_gratis = false;

if ($categoria == "comum") {
    if ($valor > 500) {
        $desconto = $valor * 0.05;
    }
    if ($valor > 1000) {
        $frete_gratis = true;
    }
}
elseif ($categoria == "vip") {
    $desconto = $valor * 0.10;
    if ($valor > 1000) {
        $frete_gratis = true;
    }
}
elseif ($categoria == "premium") {
    $desconto = $valor * 0.15;
    $frete_gratis = true;
}

$valor_final = $valor - $desconto;


echo "<div class='card mb-3' style='max-width: 24rem;'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>Resumo da Compra</h5>";
echo "<p class='card-text'>Valor Original: R$ " . number_format($valor,2,",",".") . "</p>";
echo "<p class='card-text'>Desconto Aplicado: R$ " . number_format($desconto,2,",",".") . "</p>";
echo "<p class='card-text'>Valor Final a Pagar: <strong>R$ " . number_format($valor_final,2,",",".") . "</strong></p>";

if ($frete_gratis) {
    echo "<span class='badge bg-success'>Frete Grátis</span>";
}

echo "</div>";
echo "</div>";

?>


</div>

</body>
</html>