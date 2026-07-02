<?php

require_once "Funcionario.php";

class TecnicoAdministrativo extends Funcionario
{
    private string $setor;
    private float $adicionalInsalubridade;
    private string $nivel;
    private string $turno;

    public function __construct(
        int $matricula,
        string $nome,
        string $cpf,
        float $salarioBase,
        bool $ativo,
        int $cargaHoraria,
        string $setor,
        float $adicionalInsalubridade,
        string $nivel,
        string $turno
    ) {
        parent::__construct(
            $matricula,
            $nome,
            $cpf,
            $salarioBase,
            $ativo,
            $cargaHoraria
        );

        $this->setor = $setor;
        $this->adicionalInsalubridade = $adicionalInsalubridade;
        $this->nivel = $nivel;
        $this->turno = $turno;
    }

    // Getters
    public function getSetor(): string
    {
        return $this->setor;
    }

    public function getAdicionalInsalubridade(): float
    {
        return $this->adicionalInsalubridade;
    }

    public function getNivel(): string
    {
        return $this->nivel;
    }

    public function getTurno(): string
    {
        return $this->turno;
    }

    // Setters
    public function setSetor(string $setor): void
    {
        $this->setor = $setor;
    }

    public function setAdicionalInsalubridade(float $adicionalInsalubridade): void
    {
        $this->adicionalInsalubridade = $adicionalInsalubridade;
    }

    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function setTurno(string $turno): void
    {
        $this->turno = $turno;
    }

    // Métodos obrigatórios
    public function calcularSalario(): float
    {
        $salario = $this->getSalarioBase() + $this->adicionalInsalubridade;

        if (strtolower($this->turno) == "noturno") {
            $salario += $this->getSalarioBase() * 0.20;
        }

        return $salario;
    }

    public function verificarSituacao(): bool
    {
        return $this->getAtivo();
    }

    public function calcularAdicional(): float
    {
        return $this->adicionalInsalubridade;
    }

    public function gerarCracha(): string
    {
        return md5(
            $this->getMatricula() .
            $this->getNome() .
            $this->setor
        );
    }
}