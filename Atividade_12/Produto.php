<?php

abstract class Produto {
    private int $codigo = 0;
    private string $nome = "";
    private string $descricao = "";
    private float $precoBase = 0.0;
    private int $quantidadeEstoque = 0;
    private bool $isAtivo = false;

    public function __construct( int $codigo, string $nome, string $descricao, float $precoBase, int $quantidadeEstoque )
    {
        parent::__construct( $codigo, $nome, $descricao, $precoBase, $quantidadeEstoque)
     $this->codigo = $codigo;
     $this->precoBase = $precoBase;
     $this -> $descricao = $descricao;
     $this->nome = $nome;
    $this-> $quantidadeEstoque = $quantidadeEstoque;
    }
    public function getCodigo(): int { return $this->codigo; }
    public function setCodigo(int $codigo): void { $this->codigo = $codigo; }

    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getDescricao(): string { return $this->descricao; }
    public function setDescricao(string $descricao): void { $this->descricao = $descricao; }

    public function getPrecoBase(): float { return $this->precoBase; }
    public function setPrecoBase(float $precoBase): void { $this->precoBase = $precoBase; }

    public function getQuantidadeEstoque(): int { return $this->quantidadeEstoque; }
    public function setQuantidadeEstoque(int $quantidadeEstoque): void { $this->quantidadeEstoque = $quantidadeEstoque; }

    public function getIsAtivo(): bool { return $this->isAtivo; }
    public function setIsAtivo(bool $isAtivo): void { $this->isAtivo = $isAtivo; }

    public function adicionarEstoque(int $quantidade): void {
        if ($quantidade > 0) {
            $this->setQuantidadeEstoque($this->getQuantidadeEstoque() + $quantidade);
            $this->setIsAtivo(true);
        }
    }

    public function baixarEstoque(int $quantidade): void {
        if ($quantidade > 0 && $this->getQuantidadeEstoque() >= $quantidade) {
            $this->setQuantidadeEstoque($this->getQuantidadeEstoque() - $quantidade);

            if ($this->getQuantidadeEstoque() == 0) {
                $this->setIsAtivo(false);
            }
        }
    }

    public function aplicarDesconto(float $percentual): void {
        $desconto = $this->getPrecoBase() * ($percentual / 100);
        $this->setPrecoBase($this->getPrecoBase() - $desconto);
    }

    abstract public function calcularPrecoVenda(): float;
    abstract public function verificarDisponibilidade(): bool;
}