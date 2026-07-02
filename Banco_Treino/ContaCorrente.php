<?php

require_once "Conta.php";

class ContaCorrente extends Conta
{
    private float $taxaManutencao;
    private bool $cartaoCredito;
    private float $limiteEspecial;
    private string $tipoConta;

    public function __construct(
        int $numero,
        string $titular,
        float $saldo,
        bool $ativa,
        string $agencia,
        float $limite,
        float $taxaManutencao,
        bool $cartaoCredito,
        float $limiteEspecial,
        string $tipoConta
    ){

        parent::__construct(
            $numero,
            $titular,
            $saldo,
            $ativa,
            $agencia,
            $limite
        );

        $this->taxaManutencao = $taxaManutencao;
        $this->cartaoCredito = $cartaoCredito;
        $this->limiteEspecial = $limiteEspecial;
        $this->tipoConta = $tipoConta;

    }

    // GETTERS

    public function getTaxaManutencao(): float{
        return $this->taxaManutencao;
    }

    public function getCartaoCredito(): bool{
        return $this->cartaoCredito;
    }

    public function getLimiteEspecial(): float{
        return $this->limiteEspecial;
    }

    public function getTipoConta(): string{
        return $this->tipoConta;
    }

    // SETTERS

    public function setTaxaManutencao(float $taxa): void{
        $this->taxaManutencao = $taxa;
    }

    public function setCartaoCredito(bool $cartao): void{
        $this->cartaoCredito = $cartao;
    }

    public function setLimiteEspecial(float $limite): void{
        $this->limiteEspecial = $limite;
    }

    public function setTipoConta(string $tipo): void{
        $this->tipoConta = $tipo;
    }

    // MÉTODOS

    public function calcularSaldo(): float{

        $saldo = $this->getSaldo() - $this->taxaManutencao;

        if($this->cartaoCredito){
            $saldo += $this->limiteEspecial;
        }

        return $saldo;

    }

    public function verificarStatus(): bool{

        return $this->getAtiva();

    }

    public function calcularTarifa(): float{

        return $this->taxaManutencao;

    }

    public function gerarExtrato(): string{

        return "Conta: ".$this->getNumero().
        "\nTitular: ".$this->getTitular().
        "\nSaldo: R$ ".number_format($this->calcularSaldo(),2,",",".");

    }

}