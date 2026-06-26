<?php
require_once "Produto.php";

class ProdutoFisico extends Produto {
    protected float $peso = 0.0;
    protected string $dimensoesCxLxA = "";
    protected float $custoFreteFixo = 0.0;
    protected string $transportadoraParceira = "";

    public function getPeso(): float { return $this->peso; }
    public function setPeso(float $peso): void { $this->peso = $peso; }

    public function getDimensoesCxLxA(): string { return $this->dimensoesCxLxA; }
    public function setDimensoesCxLxA(string $dimensoes): void { $this->dimensoesCxLxA = $dimensoes; }

    public function getCustoFreteFixo(): float { return $this->custoFreteFixo; }
    public function setCustoFreteFixo(float $frete): void { $this->custoFreteFixo = $frete; }

    public function getTransportadoraParceira(): string { return $this->transportadoraParceira; }
    public function setTransportadoraParceira(string $transp): void { $this->transportadoraParceira = $transp; }

    public function calcularPrecoVenda(): float {
        $taxaArmazenamento = $this->getPrecoBase() * 0.05;
        return $this->getPrecoBase() + $this->getCustoFreteFixo() + $taxaArmazenamento;
    }

    public function verificarDisponibilidade(): bool {
        return ($this->getQuantidadeEstoque() > 0 && $this->getIsAtivo());
    }

    public function calcularVolumeCubico(): float {
        if ($this->getDimensoesCxLxA() != "") {
            $valores = explode("x", $this->getDimensoesCxLxA());
            if (count($valores) === 3) {
                $volumeM3 = ($valores[0] * $valores[1] * $valores[2]) / 1000000;
                echo "Volume Cúbico calculado: {$volumeM3} m³<br>";
                return $volumeM3;
            }
        }
        return 0.0;
    }

    public function estimarPrazoEntrega(string $cepDestino): int {
        echo "Consultando rotas para o CEP {$cepDestino} via {$this->getTransportadoraParceira()}...<br>";
        $diasAleatorios = rand(2, 15); 
        return $diasAleatorios; 
    }
}