<?php

class Conta {
    public int $numero;
    public string $titular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;
    public int $status;

    public function soma($n1, $n2) {
        return $n1 + $n2;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado.<br>";
        } else {
            echo "Erro: Valor de depósito inválido.<br>";
        }
    }
    public function sacar(float $valor): void {
    if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado.<br>";
        } else {
            echo "Erro: Saldo insuficiente ou valor inválido.<br>";
        }
    }
    public function transferir(float $valor, $destino): bool {
        if ($destino != null && $destino->status == 1 && $valor > 0) {
            if ($this->saldo >= $valor) {
                $this->saldo -= $valor;
                $destino->depositar($valor);
                return true;
            }
        }
        echo "Erro na transferência.<br>";
        return false;
    }
    public function consultarSaldo() {
        return $this->saldo;
    }
    public function fecharConta() {
        if ($this->saldo == 0) {
            $this->status = 0;
            echo "Conta de {$this->titular} encerrada.<br>";
        } else {
            echo "Erro: Saldo deve ser R$ 0.00 para fechar (Saldo atual: {$this->saldo}).<br>";
        }
    }
}
