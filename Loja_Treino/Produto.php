<?php

abstract class Produto
{
    private int $codigo;
    private string $nome;
    private string $marca;
    private float $preco;
    private bool $estoque;
    private string $categoria;

    public function __construct(
        int $codigo,
        string $nome,
        string $marca,
        float $preco,
        bool $estoque,
        string $categoria
    ){

        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->categoria = $categoria;

    }

    // GETTERS

    public function getCodigo(): int{
        return $this->codigo;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function getPreco(): float{
        return $this->preco;
    }

    public function getEstoque(): bool{
        return $this->estoque;
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    // SETTERS

    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function setMarca(string $marca): void{
        $this->marca = $marca;
    }

    public function setPreco(float $preco): void{
        $this->preco = $preco;
    }

    public function setEstoque(bool $estoque): void{
        $this->estoque = $estoque;
    }

    public function setCategoria(string $categoria): void{
        $this->categoria = $categoria;
    }

    // MÉTODOS

    public function adicionarEstoque(): void{

        $this->estoque = true;

    }

    public function removerEstoque(): void{

        $this->estoque = false;

    }

    public function aplicarDesconto(float $percentual): void{

        if($percentual > 0 && $percentual <= 30){

            $this->preco -= $this->preco * ($percentual / 100);

        }

    }

    abstract public function calcularPreco(): float;

    abstract public function verificarEstoque(): bool;

}