<?php

require_once "Veiculo.php";

class Motocicleta extends Veiculo
{
    private int $cilindradas;
    private bool $possuiBau;
    private float $taxaEquipamentos;
    private string $tipoPartida;

    public function __construct(
    
    string $modelo,
    int $codigo,
    string $fabricante,
    float $valorDiaria,
    bool $disponivel,
    float $quilometragem,
    int $cilindradas,
    bool $possuiBau,
    float $taxaEquipamentos,
    string $tipoPartida,
    ) {

        parent::__construct(
            $placa,
            $modelo,
            $marca,
            $valorBase,
            $disponivel,
            $ano,
    );

        $this->cilindradas = $cilindradas;
        $this->Tipopartida = $Tipopartida;
        $this->possuiBau = $possuiBau;
        $this->taxaEquipamentos = $taxaEquipamentos;
    }

   

    public function getCilindradas(): int
    {
        return $this->cilindradas;
    }

    public function getTipoPartida(): string
    {
        return $this->tipoPartida;
    }

    public function getPossuiBau(): bool
    {
        return $this->possuiBau;
    }

    public function getTaxaEquipamentos(): float
    {
        return $this->taxaEquipamentos;
    }

    

    public function setCilindradas(int $cilindradas): void
    {
        $this->cilindradas = $cilindradas;
    }

    public function setTipoPartida(string $tipoPartida): void
    {
        $this->tipoPartida = $tipoPartida;
    }

    public function setPossuiBau(bool $possuiBau): void
    {
        $this->possuiBau = $possuiBau;
    }

    public function setTaxaEquipamentos(float $taxaEquipamentos): void
    {
        $this->taxaEquipamentos = $taxaEquipamentos;
    }

    

     public function calcularValorLocacao(int $dias): float
    {
       
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getDisponivel();
    }

    public function calculartaxaDeEntrega(): float
    {
       
    if ($this->possuiBau == $bau){
        return 15;
    }
    
    return 8;
    
    }

    public function gerarCodigo(string $cliente): string
    {
        return md5(
    
            $this->getModelo()
        
        );
    }
}