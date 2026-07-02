<?php

abstract class Veiculo{

    private string $modelo;
    private int $codigo;
    private string $fabricante;
    private float $valorDiaria;
    private bool $disponivel;
    private float $quilometragem;

    public function __construct(

    string $modelo,
    int $codigo,
    string $fabricante,
    float $valorDiaria,
    bool $disponivel,
    float $quilometragem, )
   
    {
       
        $this->modelo = $modelo;
        $this->codigo = $codigo;
        $this->fabricante = $fabricante;
        $this->valorDiaria = $valorDiaria;
        $this->disponivel = $disponivel;
        $this->quilometragem = $quilometragem;
   
        }

    
    public function getCodigo(): string{
        return $this->codigo;
    }

    public function getModelo(): string{
        return $this->modelo;
    } 

    public function getFabricante(): string{
        return $this->fabricante;
    }

    public function getValorDiaria(): float{
        return $this->getValorDiaria;
    }

    public function getDisponivel(): bool{
        return $this->disponivel;
    }

    public function getQuilometragem(): int{
        return $this->quilometragem;
    }

    

    public function setModelo(string $modelo): void{
        $this->modelo = $modelo;
    }

    public function setValorDiaria(string $valorDiaria): void{
        $this->valorDiaria = $valorDiaria;
    }

    public function setCodigo(float $codigo): void{
        $this->codigo = $codigo;
    }

    public function setDisponivel(bool $disponivel): void{
        $this->disponivel = $disponivel;
    }

    public function setQuilometragem(int $quilometragem): void{
        $this->quilometragem = $quilometragem;
 
    }
    
    public function setFabricante(int $fabricante): void{
        $this->fabricante = $fabricante;

    }
    
    
     public function alugar(): void{
        $this->disponivel = false;
    }

     public function devolver(float $percentual): float{
        $this->disponivel = true;
    }
    
     public function aplicarReajuste(float $percentual): void{

        if($percentual > 0 && $percentual <= 30){

            $this->valorDiaria -= $this->valorDiaria * 0.05;

        }

    }
    
    
    abstract public function calcularValorLocacao(int $dias): float;

    abstract public function verificarDisponibilidade(): bool;
        
        }














