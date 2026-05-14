<?php

require_once "Livro.php";

$l1 = new Livro();

$l1->titulo = "Sou o primeiro";
$l1->autor = "Joseph";
$l1->$qntPaginas = 4;
$l1->exDisponiveis = 5;

$l1->emprestarLivro();
$l1->devolverLivro();
$l1->verificarDisponibilidade();
$l1->alterarQuantidadePaginas();
$l1->exibirInformacoes();
$l1->compararPaginas();

echo "<br>";



$l2 = new Livro();

$l2->titulo = "Sou o Segundo";
$l2->autor = "Mario";
$l2->$qntPaginas = 10;
$l2->exDisponiveis = 2;

$l2->emprestarLivro();
$l2->devolverLivro();
$l2->verificarDisponibilidade();
$l2->alterarQuantidadePaginas();
$l2->exibirInformacoes();
$l2->compararPaginas();

echo "<br>";



$l3 = new Livro();

$l3->titulo = "Sou o Terceiro";
$l3->autor = "Marcelo";
$l3->$qntPaginas = 3;
$l3->exDisponiveis = 2;

$l3->emprestarLivro();
$l3->devolverLivro();
$l3->verificarDisponibilidade();
$l3->alterarQuantidadePaginas();
$l3->exibirInformacoes();
$l3->compararPaginas();

echo "<br>";