<?php

require_once "Conta.php";
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

// ===============================
// CONTA CORRENTE
// ===============================

$corrente = new ContaCorrente(
    1001,
    "João Silva",
    5000,
    true,
    "0001",
    1000,
    35,
    true,
    2000,
    "Corrente"
);

echo "<h2>CONTA CORRENTE</h2>";

echo "Titular: " . $corrente->getTitular() . "<br>";
echo "Saldo: R$ " . number_format($corrente->calcularSaldo(),2,",",".") . "<br>";
echo "Tarifa: R$ " . number_format($corrente->calcularTarifa(),2,",",".") . "<br><br>";

echo nl2br($corrente->gerarExtrato());

echo "<br><br>";

$corrente->depositar(1000);

echo "Após depósito: R$ " .
number_format($corrente->getSaldo(),2,",",".") . "<br>";

$corrente->sacar(500);

echo "Após saque: R$ " .
number_format($corrente->getSaldo(),2,",",".") . "<br>";

echo "<hr>";


// ===============================
// CONTA POUPANÇA
// ===============================

$poupanca = new ContaPoupanca(
    2001,
    "Maria Oliveira",
    8000,
    true,
    "0002",
    0,
    5,
    true,
    "Poupança",
    "Premium"
);

echo "<h2>CONTA POUPANÇA</h2>";

echo "Titular: " . $poupanca->getTitular() . "<br>";

echo "Saldo Atual: R$ " .
number_format($poupanca->calcularSaldo(),2,",",".") . "<br>";

echo "Rendimento: R$ " .
number_format($poupanca->calcularRendimento(),2,",",".") . "<br>";

echo "Código: " .
$poupanca->gerarCodigo() . "<br><br>";

$poupanca->depositar(2000);

echo "Após depósito: R$ " .
number_format($poupanca->getSaldo(),2,",",".") . "<br>";

echo "Conta ativa? ";

if($poupanca->verificarStatus()){
    echo "Sim";
}else{
    echo "Não";
}