<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lp3_aula_03</title>
</head>
<body>
    
<h3>Exercicio 1</h3>

<?php
for ($i = 100; $i >= 0; $i -= 5) {
    echo $i . " ";
}
echo "Acabou!";
?>
</p>

<h3>Exercicio 2</h3>

<?php
$soma = 0;
$quantidade = 0;

for ($t = 13; $t <= 73; $t++) {
    $soma += $t;
    $quantidade++;
}

$media = $soma / $quantidade;

echo "Média: " . $media;
?>

<h3>Exercicio 3</h3>

<?php
for ($a = 30; $a >= 1; $a--) {
    if ($a % 4 == 0) {
        echo "[$a] ";
    } else {
        echo $a . " ";
    }
}
?>
</p>



</body>
</html>