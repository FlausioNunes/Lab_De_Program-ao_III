<?php

require_once "Gato.php";

$g1 = new Gato();
$g1->nome = "Roberto";
$g1->peso = 10;

$g2 = new Gato();
$g2->nome = "Denis";

echo "<pre>";
print_r($g1);
print_r($g2);

$g1->latir();
$g2->correr();
$g1->dormir();
$g2->dormir();