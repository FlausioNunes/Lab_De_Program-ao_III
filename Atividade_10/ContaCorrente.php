<?php

require_once "conta.php";

class ContaCorrente extends Conta
 {
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;

    public function sacar($valor) {
        // Sobrescrito simples: permite o saque mesmo se o saldo ficar negativo até o limite
        $this->saldo -= $valor;
    }

    public function cobrarTaxaMensal() {
        $this->saldo -= $this->taxaManutencaoMensal;
    }

    public function solicitarAumentoLimite($valor) {
        $this->limiteChequeEspecial += $valor;
    }

    public function pagarFaturaCartao() {
        $this->sacar($this->valorCartaoCredito);
        $this->valorCartaoCredito = 0;
    }
}