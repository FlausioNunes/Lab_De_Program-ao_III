<?php

require_once "Produto.php";

class ProdutoFisico extends Produto {

    private float $peso = 0.0;
    private string $dimensoesCxLxA = "";
    private float $custoFreteFixo = 0.0;
    private string $transportadoraParceira = "";

    public function getPeso(): float { return $this->peso; }
    public function setPeso(float $peso): void { $this->peso = $peso; }

    public function getDimensoesCxLxA(): string { return $this->dimensoesCxLxA; }
    public function setDimensoesCxLxA(string $dimensoes): void { $this->dimensoesCxLxA = $dimensoes; }

    public function getCustoFreteFixo(): float { return $this->custoFreteFixo; }
    public function setCustoFreteFixo(float $frete): void { $this->custoFreteFixo = $frete; }

    public function getTransportadoraParceira(): string { return $this->transportadoraParceira; }
    public function setTransportadoraParceira(string $transportadora): void {
        $this->transportadoraParceira = $transportadora;
    }

    public function calcularPrecoVenda(): float {
        return $this->getPrecoBase()
             + $this->getCustoFreteFixo()
             + ($this->getPrecoBase() * 0.05);
    }

    public function verificarDisponibilidade(): bool {
        return $this->getQuantidadeEstoque() > 0
            && $this->getIsAtivo();
    }

    public function calcularVolumeCubico(): float {

        $dimensoes = explode("x", $this->getDimensoesCxLxA());

        if (count($dimensoes) == 3) {
            return ($dimensoes[0] * $dimensoes[1] * $dimensoes[2]) / 1000000;
        }

        return 0;
    }

    public function estimarPrazoEntrega(string $cepDestino): int {

        if (substr($cepDestino, 0, 1) == "3") {
            return 3;
        }

        return 7;
    }
}