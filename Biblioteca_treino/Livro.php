<?php

require_once "Material.php";

class Livro extends Material
{
    private int $numeroPaginas;
    private string $editora;
    private bool $capaDura;
    private float $valorFrete;

    public function __construct(
        int $codigo,
        string $titulo,
        string $autor,
        float $valor,
        bool $disponivel,
        int $anoPublicacao,
        int $numeroPaginas,
        string $editora,
        bool $capaDura,
        float $valorFrete
    ){

        parent::__construct(
            $codigo,
            $titulo,
            $autor,
            $valor,
            $disponivel,
            $anoPublicacao
        );

        $this->numeroPaginas = $numeroPaginas;
        $this->editora = $editora;
        $this->capaDura = $capaDura;
        $this->valorFrete = $valorFrete;

    }

    // GETTERS

    public function getNumeroPaginas(): int{
        return $this->numeroPaginas;
    }

    public function getEditora(): string{
        return $this->editora;
    }

    public function getCapaDura(): bool{
        return $this->capaDura;
    }

    public function getValorFrete(): float{
        return $this->valorFrete;
    }

    // SETTERS

    public function setNumeroPaginas(int $numeroPaginas): void{
        $this->numeroPaginas = $numeroPaginas;
    }

    public function setEditora(string $editora): void{
        $this->editora = $editora;
    }

    public function setCapaDura(bool $capaDura): void{
        $this->capaDura = $capaDura;
    }

    public function setValorFrete(float $valorFrete): void{
        $this->valorFrete = $valorFrete;
    }

    // MÉTODOS

    public function calcularValor(): float{

        $valorFinal = $this->getValor() + $this->valorFrete;

        if($this->capaDura){
            $valorFinal += 30;
        }

        return $valorFinal;

    }

    public function verificarDisponibilidade(): bool{

        return $this->getDisponivel();

    }

    public function calcularFrete(): float{

        return $this->valorFrete;

    }

    public function gerarFicha(): string{

        return "Código: ".$this->getCodigo().
        "\nTítulo: ".$this->getTitulo().
        "\nAutor: ".$this->getAutor().
        "\nValor Final: R$ ".
        number_format($this->calcularValor(),2,",",".");

    }

}