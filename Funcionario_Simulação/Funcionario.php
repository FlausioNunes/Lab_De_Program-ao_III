<?php

abstract class Funcionario
{
    private int $matricula;
    private string $nome;
    private string $cpf;
    private float $salarioBase;
    private bool $ativo;
    private int $cargaHoraria;

    public function __construct(
        int $matricula,
        string $nome,
        string $cpf,
        float $salarioBase,
        bool $ativo,
        int $cargaHoraria
    ) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
        $this->ativo = $ativo;
        $this->cargaHoraria = $cargaHoraria;
    }

    // Getters
    public function getMatricula(): int
    {
        return $this->matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    // Setters
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setSalarioBase(float $salarioBase): void
    {
        $this->salarioBase = $salarioBase;
    }

    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }

    public function setCargaHoraria(int $cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function admitir(): void
    {
        if (!$this->ativo) {
            $this->ativo = true;
        }
    }

    public function demitir(): void
    {
        $this->ativo = false;
    }

    public function aplicarAumento(float $percentual): void
    {
        if ($percentual > 0 && $percentual <= 40) {
            $this->salarioBase += ($this->salarioBase * $percentual) / 100;
        }
    }

    abstract public function calcularSalario(): float;

    abstract public function verificarSituacao(): bool;
}