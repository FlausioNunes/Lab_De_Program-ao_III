<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

echo "<pre>";

$cc1 = new ContaCorrente();
$cc1->titular = "João Silva";
$cc1->saldo = 500.00;
$cc1->status = 1; // Ativa
$cc1->limiteChequeEspecial = 1000.00;
$cc1->taxaManutencaoMensal = 50.00;
$cc1->valorCartaoCredito = 200.00;

echo "--- OPERAÇÕES CONTA CORRENTE ---\n";
$cc1->sacar(800); 
$cc1->cobrarTaxaMensal(); 
$cc1->pagarFaturaCartao(); 

print_r($cc1);

echo "\n--------------------------------\n";

$cp1 = new ContaPoupanca();
$cp1->titular = "Maria Oliveira";
$cp1->saldo = 2000.00;
$cp1->status = 1; 
$cp1->diaAniversario = (int)date('d'); 
$cp1->taxaRendimentoMensal = 0.01; 

echo "--- OPERAÇÕES CONTA POUPANÇA ---\n";
$cp1->preverProximoRendimento(); 
$cp1->creditarRendimento(); 

print_r($cp1);

echo "</pre>";

