<?php

class Veiculo {

    public string $marca;
    public string $modelo;
    public int $ano;
    public int $qntCombustivel;
    public int $consumoVeiculo;

    public function abastecer($percentual) {
        $this->qntCombustivel += $percentual;
    }

    public function calcularAutonomia() {
        $autonomia = $this->qntCombustivel * $this->consumoVeiculo;

        echo "Veiculo: " . $this->modelo . "<br>";
        echo "Tem a autonomia de: " . $autonomia . " km<br>";
    }

    public function exibirInformacoes() {
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Quantidade de combustivel: " . $this->qntCombustivel . "<br>";
        echo "Consumo: " . $this->consumoVeiculo . "<br>";
    }
}