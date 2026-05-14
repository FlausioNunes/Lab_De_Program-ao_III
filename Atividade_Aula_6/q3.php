<html>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>q3</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    </head>
    <body>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
<?php

$horas = $_POST['Horas'];


if ($horas <= 10) {
    $pontos = $horas * 2;
} elseif ($horas <= 20) {
    $pontos = $horas * 5;
} else {
    $pontos = $horas * 10;
}

$valor = $pontos * 0.05;


echo "<h2>Resultado</h2>";
echo "Horas de atividade: $horas<br>";
echo "Total de pontos: $pontos<br>";
echo "Valor ganho: R$ " . number_format($valor, 2, ',', '.') . "<br>";


?>
  </div>
    </body>
    </html>
</html>
