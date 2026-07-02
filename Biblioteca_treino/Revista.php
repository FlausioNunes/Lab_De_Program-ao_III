<?php

require_once "Material.php";

class Revista extends Material
{
    private int $edicao;
    private bool $mensal;
    private float $valorBrinde;
    private string $categoria;

    public function __construct(
        int $codigo,
        string $titulo,
        string $autor,
        float $valor,
        bool $disponivel,
        int $anoPublicacao,
        int $edicao,
        bool $mensal,
        float $valorBrinde,
        string $categoria
    ){

        parent::__construct(
            $codigo,
            $titulo,
            $autor,
            $valor,
            $disponivel,
            $anoPublicacao
        );

        $this->edicao = $edicao;
        $this->mensal = $mensal;
        $this->valorBrinde = $valorBrinde;
        $this->categoria = $categoria;

    }

    // GETTERS

    public function getEdicao(): int{
        return $this->edicao;
    }

    public function getMensal(): bool{
        return $this->mensal;
    }

    public function getValorBrinde(): float{
        return $this->valorBrinde;
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    // SETTERS

    public function setEdicao(int $edicao): void{
        $this->edicao = $edicao;
    }

    public function setMensal(bool $mensal): void{
        $this->mensal = $mensal;
    }

    public function setValorBrinde(float $valorBrinde): void{
        $this->valorBrinde = $valorBrinde;
    }

    public function setCategoria(string $categoria): void{
        $this->categoria = $categoria;
    }

    // MÉTODOS

    public function calcularValor(): float{

        $valorFinal = $this->getValor() + $this->valorBrinde;

        if($this->mensal){
            $valorFinal += 15;
        }

        return $valorFinal;

    }

    public function verificarDisponibilidade(): bool{

        return $this->getDisponivel();

    }

    public function calcularBrinde(): float{

        return $this->valorBrinde;

    }

    public function gerarCodigo(): string{

        return md5(
            $this->getCodigo() .
            $this->getTitulo() .
            $this->categoria
        );

    }

}