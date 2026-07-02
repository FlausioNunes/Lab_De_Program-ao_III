<?php

abstract class Material
{
    private int $codigo;
    private string $titulo;
    private string $autor;
    private float $valor;
    private bool $disponivel;
    private int $anoPublicacao;

    public function __construct(
        int $codigo,
        string $titulo,
        string $autor,
        float $valor,
        bool $disponivel,
        int $anoPublicacao
    ){

        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->valor = $valor;
        $this->disponivel = $disponivel;
        $this->anoPublicacao = $anoPublicacao;

    }

    // GETTERS

    public function getCodigo(): int{
        return $this->codigo;
    }

    public function getTitulo(): string{
        return $this->titulo;
    }

    public function getAutor(): string{
        return $this->autor;
    }

    public function getValor(): float{
        return $this->valor;
    }

    public function getDisponivel(): bool{
        return $this->disponivel;
    }

    public function getAnoPublicacao(): int{
        return $this->anoPublicacao;
    }

    // SETTERS

    public function setTitulo(string $titulo): void{
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor): void{
        $this->autor = $autor;
    }

    public function setValor(float $valor): void{
        $this->valor = $valor;
    }

    public function setDisponivel(bool $disponivel): void{
        $this->disponivel = $disponivel;
    }

    public function setAnoPublicacao(int $ano): void{
        $this->anoPublicacao = $ano;
    }

    // MÉTODOS

    public function emprestar(): void{

        if($this->disponivel){
            $this->disponivel = false;
        }

    }

    public function devolver(): void{

        $this->disponivel = true;

    }

    public function aplicarDesconto(float $percentual): void{

        if($percentual > 0 && $percentual <= 30){

            $this->valor -= $this->valor * ($percentual / 100);

        }

    }

    abstract public function calcularValor(): float;

    abstract public function verificarDisponibilidade(): bool;

}