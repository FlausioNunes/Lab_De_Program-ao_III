<?php

require_once "Produto.php";

class Roupa extends Produto
{
    private string $tamanho;
    private string $cor;
    private float $descontoExtra;
    private string $genero;

    public function __construct(
        int $codigo,
        string $nome,
        string $marca,
        float $preco,
        bool $estoque,
        string $categoria,
        string $tamanho,
        string $cor,
        float $descontoExtra,
        string $genero
    ){

        parent::__construct(
            $codigo,
            $nome,
            $marca,
            $preco,
            $estoque,
            $categoria
        );

        $this->tamanho = $tamanho;
        $this->cor = $cor;
        $this->descontoExtra = $descontoExtra;
        $this->genero = $genero;

    }

    // GETTERS

    public function getTamanho(): string{
        return $this->tamanho;
    }

    public function getCor(): string{
        return $this->cor;
    }

    public function getDescontoExtra(): float{
        return $this->descontoExtra;
    }

    public function getGenero(): string{
        return $this->genero;
    }

    // SETTERS

    public function setTamanho(string $tamanho): void{
        $this->tamanho = $tamanho;
    }

    public function setCor(string $cor): void{
        $this->cor = $cor;
    }

    public function setDescontoExtra(float $descontoExtra): void{
        $this->descontoExtra = $descontoExtra;
    }

    public function setGenero(string $genero): void{
        $this->genero = $genero;
    }

    // MÉTODOS

    public function calcularPreco(): float{

        $precoFinal = $this->getPreco() - $this->descontoExtra;

        return $precoFinal;

    }

    public function verificarEstoque(): bool{

        return $this->getEstoque();

    }

    public function calcularDesconto(): float{

        return $this->descontoExtra;

    }

    public function gerarCodigo(): string{

        return md5(
            $this->getCodigo() .
            $this->getNome() .
            $this->genero
        );

    }

}