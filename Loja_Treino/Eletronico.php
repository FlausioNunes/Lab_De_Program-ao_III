<?php

require_once "Produto.php";

class Eletronico extends Produto
{
    private int $garantia;
    private string $voltagem;
    private bool $wifi;
    private float $valorFrete;

    public function __construct(
        int $codigo,
        string $nome,
        string $marca,
        float $preco,
        bool $estoque,
        string $categoria,
        int $garantia,
        string $voltagem,
        bool $wifi,
        float $valorFrete
    ){

        parent::__construct(
            $codigo,
            $nome,
            $marca,
            $preco,
            $estoque,
            $categoria
        );

        $this->garantia = $garantia;
        $this->voltagem = $voltagem;
        $this->wifi = $wifi;
        $this->valorFrete = $valorFrete;

    }

    // GETTERS

    public function getGarantia(): int{
        return $this->garantia;
    }

    public function getVoltagem(): string{
        return $this->voltagem;
    }

    public function getWifi(): bool{
        return $this->wifi;
    }

    public function getValorFrete(): float{
        return $this->valorFrete;
    }

    // SETTERS

    public function setGarantia(int $garantia): void{
        $this->garantia = $garantia;
    }

    public function setVoltagem(string $voltagem): void{
        $this->voltagem = $voltagem;
    }

    public function setWifi(bool $wifi): void{
    $this->wifi = $wifi;
}

public function setValorFrete(float $valorFrete): void{
    $this->valorFrete = $valorFrete;
}

// MÉTODOS

public function calcularPreco(): float{

    $precoFinal = $this->getPreco() + $this->valorFrete;

    if($this->wifi){
        $precoFinal += 150;
    }

    return $precoFinal;

}

public function verificarEstoque(): bool{

    return $this->getEstoque();

}

public function calcularGarantia(): int{

    return $this->garantia;

}

public function gerarEtiqueta(): string{

    return "Código: ".$this->getCodigo().
    "\nProduto: ".$this->getNome().
    "\nMarca: ".$this->getMarca().
    "\nPreço: R$ ".
    number_format($this->calcularPreco(),2,",",".");

}

}