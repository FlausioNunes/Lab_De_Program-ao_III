<?php

require_once "Funcionario.php";

$f1 = new Funcionario();

$f1->nome = "Flausio";
$f1->codigo = 2609;
$f1->salario = 10000;
$f1->cargaHorariaMensal= 100;

$f1->exibirDados();
$f1->calcularSalarioHora();
$f1->aumentarSalario(50); //Porcentagem
$f1->exibirDados();



