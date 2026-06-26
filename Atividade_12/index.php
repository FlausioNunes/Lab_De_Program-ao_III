<?php

require_once("Produtos.php");
require_once("ProdutoDigital.php");
require_once("ProdutoFisico.php");

$p1= new ProdutoDigital(2009,"curso 1","vale comprar",15,180);
$p2= new ProdutoFisico(1235,"curso2","como se usa",50,15);

echo $sp1->calcularPrecoVenda() . "<pre>";
echo $sp1->verificarDisponibilidade() . "<pre>";
echo $sp1->calcularVolumeCubico() . "<pre>";
echo $sp1->calcularPrecoVenda() . "<pre>";

echo $sp2->calcularPrecoVenda() . "<pre>";
echo $sp2->verificarDisponibilidade() . "<pre>";
echo $sp2->calcularVolumeCubico() . "<pre>";
echo $sp2->calcularPrecoVenda() . "<pre>";