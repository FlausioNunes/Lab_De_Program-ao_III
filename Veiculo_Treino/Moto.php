<?php

require_once "Veiculo.php";

class Moto extends Veiculo
{
    private int $cilindradas;
    private bool $partidaEletrica;
    private float $valorCapacete;
    private string $categoria;

    public function __construct(
        string $placa,
        string $modelo,
        string $marca,
        float $valorBase,
        bool $disponivel,
        int $ano,
        int $cilindradas,
        bool $partidaEletrica,
        float $valorCapacete,
        string $categoria
    ) {

        parent::__construct(
            $placa,
            $modelo,
            $marca,
            $valorBase,
            $disponivel,
            $ano
        );

        $this->cilindradas = $cilindradas;
        $this->partidaEletrica = $partidaEletrica;
        $this->valorCapacete = $valorCapacete;
        $this->categoria = $categoria;
    }

    // GETTERS

    public function getCilindradas(): int
    {
        return $this->cilindradas;
    }

    public function getPartidaEletrica(): bool
    {
        return $this->partidaEletrica;
    }

    public function getValorCapacete(): float
    {
        return $this->valorCapacete;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    // SETTERS

    public function setCilindradas(int $cilindradas): void
    {
        $this->cilindradas = $cilindradas;
    }

    public function setPartidaEletrica(bool $partidaEletrica): void
    {
        $this->partidaEletrica = $partidaEletrica;
    }

    public function setValorCapacete(float $valorCapacete): void
    {
        $this->valorCapacete = $valorCapacete;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    // MÉTODOS

    public function calcularValorFinal(): float
    {
        $valor = $this->getValorBase() + $this->valorCapacete;

        if ($this->partidaEletrica) {
            $valor += 800;
        }

        return $valor;
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getDisponivel();
    }

    public function calcularLicenciamento(): float
    {
        return 350;
    }

    public function gerarCodigo(): string
    {
        return md5(
            $this->getPlaca() .
            $this->getModelo() .
            $this->categoria
        );
    }
}