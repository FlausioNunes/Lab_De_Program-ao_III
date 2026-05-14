<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2>Resultado da Conta de Energia</h2>

<?php

$kwh = floatval($_POST['quant']);
$tipo = $_POST['lugar'];
$total = 0;

if ($tipo == 1) { 
    $total = ($kwh <= 500) ? $kwh * 0.40 : $kwh * 0.65;
}
elseif ($tipo == 3) {
    $total = ($kwh <= 1000) ? $kwh * 0.55 : $kwh * 0.60;
}
elseif ($tipo == 2) {
    $total = ($kwh <= 5000) ? $kwh * 0.55 : $kwh * 0.60;
}

echo "<div class='alert alert-success mt-3'>";
echo "Valor total a pagar: <strong>R$ " . number_format($total,2,",",".") . "</strong>";
echo "</div>";

?>



</div>

</body>
</html>