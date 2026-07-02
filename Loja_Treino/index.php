<?php

require_once "Produto.php";
require_once "Eletronico.php";
require_once "Roupa.php";

// ===============================
// ELETRÔNICO
// ===============================

$eletronico = new Eletronico(
    101,
    "Notebook",
    "Dell",
    4500,
    true,
    "Informática",
    24,
    "220V",
    true,
    80
);

echo "<h2>ELETRÔNICO</h2>";

echo "Produto: " . $eletronico->getNome() . "<br>";
echo "Marca: " . $eletronico->getMarca() . "<br>";

echo "Preço Final: R$ " .
number_format($eletronico->calcularPreco(),2,",",".") . "<br>";

echo "Garantia: " .
$eletronico->calcularGarantia() . " meses<br><br>";

echo nl2br($eletronico->gerarEtiqueta());

echo "<br><br>";

$eletronico->aplicarDesconto(10);

echo "Preço após desconto: R$ " .
number_format($eletronico->getPreco(),2,",",".") . "<br>";

echo "<hr>";


// ===============================
// ROUPA
// ===============================

$roupa = new Roupa(
    202,
    "Camiseta",
    "Nike",
    150,
    true,
    "Vestuário",
    "M",
    "Preta",
    20,
    "Masculino"
);

echo "<h2>ROUPA</h2>";

echo "Produto: " . $roupa->getNome() . "<br>";

echo "Preço Final: R$ " .
number_format($roupa->calcularPreco(),2,",",".") . "<br>";

echo "Desconto Extra: R$ " .
number_format($roupa->calcularDesconto(),2,",",".") . "<br>";

echo "Código: " .
$roupa->gerarCodigo() . "<br><br>";

$roupa->removerEstoque();

echo "Em estoque? ";

if($roupa->verificarEstoque()){
    echo "Sim";
}else{
    echo "Não";
}

echo "<br><br>";

$roupa->adicionarEstoque();

echo "Após adicionar ao estoque: ";

if($roupa->verificarEstoque()){
    echo "Disponível";
}else{
    echo "Indisponível";
}