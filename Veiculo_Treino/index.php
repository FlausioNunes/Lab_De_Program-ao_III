<?php

require_once "Veiculo.php";
require_once "Carro.php";
require_once "Moto.php";


// CARRO


$carro = new Carro(
    "ABC-1234",
    "Civic",
    "Honda",
    85000,
    true,
    2022,
    4,
    "Automático",
    true,
    3500
);

echo "<h2>CARRO</h2>";

echo "Modelo: " . $carro->getModelo() . "<br>";
echo "Marca: " . $carro->getMarca() . "<br>";
echo "Valor Final: R$ " .
number_format($carro->calcularValorFinal(),2,",",".") . "<br>";

echo "IPVA: R$ " .
number_format($carro->calcularIPVA(),2,",",".") . "<br><br>";

echo nl2br($carro->gerarFicha());

echo "<br><br>";

$carro->aplicarDesconto(15);

echo "Valor Base após desconto: R$ " .
number_format($carro->getValorBase(),2,",",".") . "<br>";

echo "<hr>";


// MOTO


$moto = new Moto(
    "XYZ-9876",
    "CG 160",
    "Honda",
    18000,
    true,
    2024,
    160,
    true,
    600,
    "A"
);

echo "<h2>MOTO</h2>";

echo "Modelo: " . $moto->getModelo() . "<br>";

echo "Marca: " . $moto->getMarca() . "<br>";

echo "Valor Final: R$ " .
number_format($moto->calcularValorFinal(),2,",",".") . "<br>";

echo "Licenciamento: R$ " .
number_format($moto->calcularLicenciamento(),2,",",".") . "<br>";

echo "Código: " .
$moto->gerarCodigo() . "<br><br>";

$moto->aplicarDesconto(10);

echo "Valor Base após desconto: R$ " .
number_format($moto->getValorBase(),2,",",".") . "<br>";

echo "<br>";

echo "Disponível? ";

if($moto->verificarDisponibilidade()){
    echo "Sim";
}else{
    echo "Não";
}