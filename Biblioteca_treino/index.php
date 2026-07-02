<?php

require_once "Material.php";
require_once "Livro.php";
require_once "Revista.php";

// ===============================
// LIVRO
// ===============================

$livro = new Livro(
    101,
    "Dom Casmurro",
    "Machado de Assis",
    50,
    true,
    1899,
    320,
    "Editora Ática",
    true,
    20
);

echo "<h2>LIVRO</h2>";

echo "Título: " . $livro->getTitulo() . "<br>";
echo "Autor: " . $livro->getAutor() . "<br>";
echo "Valor Final: R$ " .
number_format($livro->calcularValor(),2,",",".") . "<br>";

echo "Frete: R$ " .
number_format($livro->calcularFrete(),2,",",".") . "<br><br>";

echo nl2br($livro->gerarFicha());

echo "<br><br>";

$livro->aplicarDesconto(15);

echo "Valor após desconto: R$ " .
number_format($livro->getValor(),2,",",".") . "<br>";

echo "<hr>";


// ===============================
// REVISTA
// ===============================

$revista = new Revista(
    202,
    "Superinteressante",
    "Editora Abril",
    25,
    true,
    2025,
    350,
    true,
    10,
    "Ciência"
);

echo "<h2>REVISTA</h2>";

echo "Título: " . $revista->getTitulo() . "<br>";

echo "Valor Final: R$ " .
number_format($revista->calcularValor(),2,",",".") . "<br>";

echo "Brinde: R$ " .
number_format($revista->calcularBrinde(),2,",",".") . "<br>";

echo "Código: " .
$revista->gerarCodigo() . "<br><br>";

$revista->emprestar();

echo "Disponível? ";

if($revista->verificarDisponibilidade()){
    echo "Sim";
}else{
    echo "Não";
}

echo "<br><br>";

$revista->devolver();

echo "Após devolver: ";

if($revista->verificarDisponibilidade()){
    echo "Disponível";
}else{
    echo "Emprestada";
}