<html>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>q1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <?php

$peso = $_POST['Peso'];
$altura = $_POST['Altura'];

$imc = $peso / ($altura * $altura);

echo "<h2>Resultado</h2>";
echo "IMC: " . $imc . "<br>";


if($imc < 18.5){
    echo "<div class='alert alert-warning'>Abaixo do peso</div>";
}

else if($imc >= 18.5 && $imc < 25){
    echo "<div class='alert alert-success'>Peso ideal</div>";
}

else if($imc >= 25 && $imc < 30){
    echo "<div class='alert alert-info'>Sobrepeso</div>";
}

else if($imc >= 30 && $imc < 40){
    echo "<div class='alert alert-danger'>Obesidade</div>";
}

else{
    echo "<div class='alert alert-dark'>Obesidade mórbida</div>";
}

?>

  </div>
    </body>
    </html>
</html>

