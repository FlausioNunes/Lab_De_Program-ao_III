<?php

require_once "Veiculo.php";

$c1 = new Veiculo();

$c1->marca = "Fiat";
$c1->modelo = "Pulse";
$c1->ano = 2019;
$c1->qntCombustivel = 50;
$c1->consumoVeiculo = 10;

$c1->exibirInformacoes();
$c1->abastecer(1);
$c1->calcularAutonomia();

echo "<br>";


$c2 = new Veiculo();

$c2->marca = "Toyota";
$c2->modelo = "Corolla";
$c2->ano = 2022;
$c2->qntCombustivel = 45;
$c2->consumoVeiculo = 12;

$c2->exibirInformacoes();
$c2->abastecer(5);
$c2->calcularAutonomia();

echo "<br>";



$c3 = new Veiculo();

$c3->marca = "Honda";
$c3->modelo = "Civic";
$c3->ano = 2021;
$c3->qntCombustivel = 40;
$c3->consumoVeiculo = 14;

$c3->exibirInformacoes();
$c3->abastecer(10);
$c3->calcularAutonomia();

?>