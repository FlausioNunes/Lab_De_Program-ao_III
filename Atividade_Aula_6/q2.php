<html>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>q2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <?php

$tipo = $_POST['Carro'];
$dias = $_POST['Dias'];
$km = $_POST['Km'];

$total = 0;

if($tipo == "popular"){

    $total = $dias * 90;

    if($km <= 100){
        $total += $km * 0.20;
    }
    else{
        $total += $km * 0.10;
    }

}

else{

    $total = $dias * 150;

    if($km <= 200){
        $total += $km * 0.30;
    }
    else{
        $total += $km * 0.25;
    }

}

echo "<h2>Resultado</h2>";

echo "Tipo de carro: " . $tipo . "<br>";
echo "Dias alugados: " . $dias . "<br>";
echo "Km percorridos: " . $km . "<br>";

echo "<div class='alert alert-success'>";
echo "Total a pagar: R$ " . $total;
echo "</div>";



?>
  </div>
    </body>
    </html>
</html>



