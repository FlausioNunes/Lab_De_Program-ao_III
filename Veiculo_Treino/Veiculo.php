<?php

abstract class Veiculo
{
    private string $placa;
    private string $modelo;
    private string $marca;
    private float $valorBase;
    private bool $disponivel;
    private int $ano;

    public function __construct(
        string $placa,
        string $modelo,
        string $marca,
        float $valorBase,
        bool $disponivel,
        int $ano
    ){
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->valorBase = $valorBase;
        $this->disponivel = $disponivel;
        $this->ano = $ano;
    }

    // GETTERS
    public function getPlaca(): string{
        return $this->placa;
    }

    public function getModelo(): string{
        return $this->modelo;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function getValorBase(): float{
        return $this->valorBase;
    }

    public function getDisponivel(): bool{
        return $this->disponivel;
    }

    public function getAno(): int{
        return $this->ano;
    }

    // SETTERS
    public function setModelo(string $modelo): void{
        $this->modelo = $modelo;
    }

    public function setMarca(string $marca): void{
        $this->marca = $marca;
    }

    public function setValorBase(float $valorBase): void{
        $this->valorBase = $valorBase;
    }

    public function setDisponivel(bool $disponivel): void{
        $this->disponivel = $disponivel;
    }

    public function setAno(int $ano): void{
        $this->ano = $ano;
    }

    
    public function vender(): void{
        $this->disponivel = false;
    }

    public function disponibilizar(): void{
        $this->disponivel = true;
    }

    public function aplicarDesconto(float $percentual): void{

        if($percentual > 0 && $percentual <= 30){

            $this->valorBase -= $this->valorBase * ($percentual / 100);

        }

    }

    abstract public function calcularValorFinal(): float;

    abstract public function verificarDisponibilidade(): bool;

}