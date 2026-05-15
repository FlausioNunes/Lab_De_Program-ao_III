<?php

class Veiculo {

    public string $modelo;
    public string $marca;
    public int $ano;
    public int $qntCombustivel;
    public int $dispAluguel;

    public function alugarVeiculo() {

        if ($this->dispAluguel > 0) {

            $this->dispAluguel--;

            echo "Carro emprestado! Estoque agora: " . $this->dispAluguel . "<br>";

        } else {

            echo "Nao ha carros disponiveis para emprestimo.<br>";

        }

    }

    public function devolverVeiculo() {

        $this->dispAluguel++;

        echo "Carro devolvido! Estoque agora: " . $this->dispAluguel . "<br>";

    }

    public function verificarDisponibilidade() {

        if ($this->dispAluguel > 0) {

            echo "Veiculo disponivel!<br>";

        } else {

            echo "Veiculo nao disponivel!<br>";

        }

    }

    public function viajar($distancia) {

        if ($this->qntCombustivel >= $distancia) {

            $this->qntCombustivel -= $distancia;

            echo "Viagem realizada com sucesso!<br>";
            echo "Combustivel restante: " . $this->qntCombustivel . "<br>";

        } else {

            echo "Combustivel insuficiente!<br>";

        }

    }

    public function alterarAno($novoAno) {

        $this->ano = $novoAno;

        echo "Ano alterado para: " . $this->ano . "<br>";

    }

    public function compararCombustivel($outroVeiculo) {

        if ($this->qntCombustivel > $outroVeiculo->qntCombustivel) {

            echo $this->modelo . " possui mais combustivel.<br>";

        } elseif ($this->qntCombustivel < $outroVeiculo->qntCombustivel) {

            echo $outroVeiculo->modelo . " possui mais combustivel.<br>";

        } else {

            echo "Os dois veiculos possuem a mesma quantidade de combustivel.<br>";

        }

    }

    public function exibirInfo() {

        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Quantidade de combustivel: " . $this->qntCombustivel . "<br>";
        echo "Disponivel para aluguel: " . $this->dispAluguel . "<br><br>";

    }

}