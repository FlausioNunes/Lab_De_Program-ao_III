<?php

abstract class Produto {
    protected int $codigo = 0;
    protected string $nome = "";
    protected string $descricao = "";
    protected float $precoBase = 0.0;
    protected int $quantidadeEstoque = 0;
    protected bool $isAtivo = false;

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
            if (!$this->getIsAtivo()) {
                $this->setIsAtivo(true);
            }
            echo "Estoque atualizado (+{$quantidade}). Total: {$this->getQuantidadeEstoque()}<br>";
        } else {
            echo "Erro: Quantidade inválida.<br>";
        }
    }

    public function baixarEstoque(int $quantidade): void {
        if ($quantidade > 0 && $this->getQuantidadeEstoque() >= $quantidade) {
            $this->setQuantidadeEstoque($this->getQuantidadeEstoque() - $quantidade);
            if ($this->getQuantidadeEstoque() === 0) {
                $this->setIsAtivo(false);
            }
            echo "Baixa no estoque (-{$quantidade}). Restam: {$this->getQuantidadeEstoque()}<br>";
        } else {
            echo "Erro: Estoque insuficiente.<br>";
        }
    }

    public function aplicarDesconto(float $percentual): void {
        if ($percentual >= 0 && $percentual <= 90) {
            $desconto = $this->getPrecoBase() * ($percentual / 100);
            $this->setPrecoBase($this->getPrecoBase() - $desconto);
            echo "Desconto de {$percentual}% aplicado! Novo preço base: R$ {$this->getPrecoBase()}<br>";
        } else {
            echo "Erro: Desconto inválido.<br>";
        }
    }
    abstract public function calcularPrecoVenda(): float;
    abstract public function verificarDisponibilidade(): bool;
}