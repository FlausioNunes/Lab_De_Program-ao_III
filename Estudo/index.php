<?php

require_once "Veiculo.php";

$c1 = new Veiculo();

$c1->marca = "Toyota";
$c1->modelo = "Corolla";
$c1->ano = 2010;
$c1->qntCombustivel = 50;
$c1->dispAluguel = 1;

$c1->alugarVeiculo();
$c1->devolverVeiculo();
$c1->verificarDisponibilidade();
$c1->viajar(20);
$c1->alterarAno(2025);
$c1->exibirInfo();

echo "<hr>";

$c2 = new Veiculo();

$c2->marca = "Fiat";
$c2->modelo = "Cronos";
$c2->ano = 2015;
$c2->qntCombustivel = 32;
$c2->dispAluguel = 4;

$c2->alugarVeiculo();
$c2->devolverVeiculo();
$c2->verificarDisponibilidade();
$c2->viajar(10);
$c2->alterarAno(2022);
$c2->exibirInfo();

echo "<hr>";

$c3 = new Veiculo();

$c3->marca = "Volkswagen";
$c3->modelo = "Polo";
$c3->ano = 2017;
$c3->qntCombustivel = 12;
$c3->dispAluguel = 0;

$c3->alugarVeiculo();
$c3->devolverVeiculo();
$c3->verificarDisponibilidade();
$c3->viajar(5);
$c3->alterarAno(2020);
$c3->exibirInfo();

echo "<hr>";

$c1->compararCombustivel($c2);
echo "<br>";

$c2->compararCombustivel($c3);
echo "<br>";

$c1->compararCombustivel($c3);

?>