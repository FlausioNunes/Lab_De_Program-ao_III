<?php

require_once "Funcionario.php";
require_once "Professor.php";
require_once "TecnicoAdministrativo.php";

// ======================
// Professor
// ======================

$professor = new Professor(
    1001,
    "Carlos Silva",
    "123.456.789-00",
    4500,
    true,
    40,
    "Doutorado",
    20,
    80,
    true
);

echo "<h2>Professor</h2>";

echo "Nome: " . $professor->getNome() . "<br>";
echo "Salário: R$ " . number_format($professor->calcularSalario(), 2, ",", ".") . "<br>";
echo "Bônus: R$ " . number_format($professor->calcularBonus(), 2, ",", ".") . "<br><br>";

echo nl2br($professor->gerarRelatorio());

echo "<br><br>";

$professor->aplicarAumento(10);

echo "Salário Base após aumento de 10%: R$ " .
number_format($professor->getSalarioBase(), 2, ",", ".") . "<br>";

echo "<hr>";

// Tecnico Administrativo

$tecnico = new TecnicoAdministrativo(
    2001,
    "Mariana Souza",
    "987.654.321-00",
    3200,
    true,
    40,
    "Financeiro",
    600,
    "II",
    "Noturno"
);

echo "<h2>Técnico Administrativo</h2>";

echo "Nome: " . $tecnico->getNome() . "<br>";
echo "Salário: R$ " . number_format($tecnico->calcularSalario(), 2, ",", ".") . "<br>";
echo "Adicional: R$ " . number_format($tecnico->calcularAdicional(), 2, ",", ".") . "<br>";
echo "Crachá: " . $tecnico->gerarCracha() . "<br><br>";

$tecnico->aplicarAumento(20);

echo "Salário Base após aumento de 20%: R$ " .
number_format($tecnico->getSalarioBase(), 2, ",", ".") . "<br>";

echo "<br>";

echo "Funcionário ativo? ";

if($tecnico->verificarSituacao()){
    echo "Sim";
}else{
    echo "Não";
}