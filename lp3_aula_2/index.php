<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
</head>
<body>
    
<h1>LP3 Aula 2</h1>

<?php
$xuxu = 5;

echo "isso é um numero: $xuxu <br>";
echo 'isso e um texto: xuxu <br>';
echo 4 . "<br>";
echo $xuxu . " Isso é um resultado";

?>

<h3>Lista</h3>
<ul>
    <?php 
    
    if($xuxu % 2 == 0) {
        $resp = "Par";
    }else{
        $resp = "impar";
    }
    
    ?>
   
    
    <?php if ($xuxu % 2 == 0) { ?>
        <li>A variavel xuxu e par</li>
<?php } else {  ?>
    <li>A variavel xuxu e impar</li>
    <li>Deu certo</li>
<?php } ?>


    </ul>

</body>
</html>
