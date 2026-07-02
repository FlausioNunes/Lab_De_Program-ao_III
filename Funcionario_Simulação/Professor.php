<?php

require_once "Funcionario.php";

class Professor extends Funcionario
{
    private string $titulacao;
    private int $horasAula;
    private float $valorHoraAula;
    private bool $coordenador;

    public function __construct(
        int $matricula,
        string $nome,
        string $cpf,
        float $salarioBase,
        bool $ativo,
        int $cargaHoraria,
        string $titulacao,
        int $horasAula,
        float $valorHoraAula,
        bool $coordenador
    ) {
        parent::__construct(
            $matricula,
            $nome,
            $cpf,
            $salarioBase,
            $ativo,
            $cargaHoraria
        );

        $this->titulacao = $titulacao;
        $this->horasAula = $horasAula;
        $this->valorHoraAula = $valorHoraAula;
        $this->coordenador = $coordenador;
    }

    // Getters
    public function getTitulacao(): string
    {
        return $this->titulacao;
    }

    public function getHorasAula(): int
    {
        return $this->horasAula;
    }

    public function getValorHoraAula(): float
    {
        return $this->valorHoraAula;
    }

    public function getCoordenador(): bool
    {
        return $this->coordenador;
    }

    // Setters
    public function setTitulacao(string $titulacao): void
    {
        $this->titulacao = $titulacao;
    }

    public function setHorasAula(int $horasAula): void
    {
        $this->horasAula = $horasAula;
    }

    public function setValorHoraAula(float $valorHoraAula): void
    {
        $this->valorHoraAula = $valorHoraAula;
    }

    public function setCoordenador(bool $coordenador): void
    {
        $this->coordenador = $coordenador;
    }

    // Métodos obrigatórios

    public function calcularSalario(): float
    {
        $salario = $this->getSalarioBase() + ($this->horasAula * $this->valorHoraAula);

        if ($this->coordenador) {
            $salario += 1500;
        }

        return $salario;
    }

    public function verificarSituacao(): bool
    {
        return $this->getAtivo();
    }

    public function calcularBonus(): float
    {
        if ($this->titulacao == "Doutorado") {
            return 2000;
        } elseif ($this->titulacao == "Mestrado") {
            return 1000;
        }

        return 500;
    }

    public function gerarRelatorio(): string
    {
        return "Matrícula: " . $this->getMatricula() .
            "\nNome: " . $this->getNome() .
            "\nTitulação: " . $this->titulacao .
            "\nSalário: R$ " . number_format($this->calcularSalario(), 2, ",", ".");
    }
}