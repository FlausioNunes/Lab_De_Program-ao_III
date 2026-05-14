<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 1</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<?php

$nota1 = $_POST['not1'];
$nota2 = $_POST['not2'];
$nota3 = $_POST['not3'];
$frequencia = $_POST['freq'];

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($frequencia < 75){
    echo '<div class="alert alert-danger" role="alert">
  Reprovado por Frequencia!';
}

elseif ($media >= 7.0){
    echo '<div class="alert alert-success" role="alert">
  Aprovado!';
}

elseif ($media >= 4.0 && $media <= 6.9){
    echo '<div class="alert alert-warning" role="alert">
  Recuperacao!';
}

else{
    echo '<div class="alert alert-danger" role="alert">
  Reprovado por Nota!';
}

?>



</body>
</html>

