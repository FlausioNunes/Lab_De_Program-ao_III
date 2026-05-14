<?php

class Funcionario {

    public int $codigo;
    public string $nome;
    public float $salario;
    public int $cargaHorariaMensal;

    public function calcularSalarioHora() {
        $valor = $this->salario / $this->cargaHorariaMensal;
        echo "Funcionario: " . $this->nome;
        echo " recebe " . $valor . " por hora trabalhada. <br>";
    }

    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
        echo "Novo salario: " . $this->salario . "<br>";
    }

    public function exibirDados() {
        echo "Codigo: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Salario: " . $this->salario . "<br>";
        echo "Carga horaria mensal: " . $this->cargaHorariaMensal . "<br>";
    }

}

?>
 