<?php

require_once "Veiculo.php";

class Carro extends Veiculo
{
    private int $portas;
    private string $cambio;
    private bool $arCondicionado;
    private float $valorSeguro;

    public function __construct(
        string $placa,
        string $modelo,
        string $marca,
        float $valorBase,
        bool $disponivel,
        int $ano,
        int $portas,
        string $cambio,
        bool $arCondicionado,
        float $valorSeguro
    ) {

        parent::__construct(
            $placa,
            $modelo,
            $marca,
            $valorBase,
            $disponivel,
            $ano
        );

        $this->portas = $portas;
        $this->cambio = $cambio;
        $this->arCondicionado = $arCondicionado;
        $this->valorSeguro = $valorSeguro;
    }

    // GETTERS

    public function getPortas(): int
    {
        return $this->portas;
    }

    public function getCambio(): string
    {
        return $this->cambio;
    }

    public function getArCondicionado(): bool
    {
        return $this->arCondicionado;
    }

    public function getValorSeguro(): float
    {
        return $this->valorSeguro;
    }

    // SETTERS

    public function setPortas(int $portas): void
    {
        $this->portas = $portas;
    }

    public function setCambio(string $cambio): void
    {
        $this->cambio = $cambio;
    }

    public function setArCondicionado(bool $arCondicionado): void
    {
        $this->arCondicionado = $arCondicionado;
    }

    public function setValorSeguro(float $valorSeguro): void
    {
        $this->valorSeguro = $valorSeguro;
    }

    // MÉTODOS

    public function calcularValorFinal(): float
    {
        $valor = $this->getValorBase() + $this->valorSeguro;

        if ($this->arCondicionado) {
            $valor += 2500;
        }

        return $valor;
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getDisponivel();
    }

    public function calcularIPVA(): float
    {
        return $this->calcularValorFinal() * 0.04;
    }

    public function gerarFicha(): string
    {
        return "Placa: " . $this->getPlaca() .
            "\nModelo: " . $this->getModelo() .
            "\nMarca: " . $this->getMarca() .
            "\nValor Final: R$ " .
            number_format($this->calcularValorFinal(), 2, ",", ".");
    }
}