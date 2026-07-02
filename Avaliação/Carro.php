<?php

require_once "Veiculo.php";

class Carro extends Veiculo
{
    private int $portas;
    private string $combustivel;
    private string $categoria;
    private float $valorSeguro;

    public function __construct(
    string $modelo,
    int $codigo,
    string $fabricante,
    float $valorDiaria,
    bool $disponivel,
    float $quilometragem,
    int $portas,
    string $combustivel,
    bool $categoria,
    float $valorSeguro,
    ) {

        parent::__construct(
            $placa,
            $modelo,
            $marca,
            $valorBase,
            $disponivel,
            $ano,
);
        $this->portas = $portas;
        $this->combustivel = $combustivel;
        $this->categoria = $categoria;
        $this->valorSeguro = $valorSeguro;
        

    }


    public function getPortas(): int
    {
        return $this->portas;
    }

    public function getCombustivel(): string
    {
        return $this->combustivel;
    }

    public function getCategoria(): bool
    {
        return $this->categoria;
    }

    public function getValorSeguro(): float
    {
        return $this->valorSeguro;
    }

   

    public function setPortas(int $portas): void
    {
        $this->portas = $portas;
    }

    public function setCombustivel(string $combustivel): void
    {
        $this->cambio = $combustivel;
    }

    public function setCategoria(bool $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function setValorSeguro(float $valorSeguro): void
    {
        $this->valorSeguro = $valorSeguro;
    }

    

    public function calcularValorLocacao(int $dias): float
    {
        $valor = $this->getValorDiaria() + $this->valorSeguro;

        if ($this->categoria == $sedan) {
            $valor += 2500;
        }

        return $valor;
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getDisponivel();
    }

    public function estimarConsumo(float $distancia): float
   
    {
    
    if ($this->distancia <= 12) {
        $valor  * 0.04;
    }
    
    return $this->estimarConsumo();
    }

    
}