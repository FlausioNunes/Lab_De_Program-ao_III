<?php

require_once "Conta.php";

class ContaPoupanca extends Conta
{
    private float $taxaRendimento;
    private bool $aniversarioConta;
    private string $tipoPoupanca;
    private string $categoria;

    public function __construct(
        int $numero,
        string $titular,
        float $saldo,
        bool $ativa,
        string $agencia,
        float $limite,
        float $taxaRendimento,
        bool $aniversarioConta,
        string $tipoPoupanca,
        string $categoria
    ){

        parent::__construct(
            $numero,
            $titular,
            $saldo,
            $ativa,
            $agencia,
            $limite
        );

        $this->taxaRendimento = $taxaRendimento;
        $this->aniversarioConta = $aniversarioConta;
        $this->tipoPoupanca = $tipoPoupanca;
        $this->categoria = $categoria;

    }

    // GETTERS

    public function getTaxaRendimento(): float{
        return $this->taxaRendimento;
    }

    public function getAniversarioConta(): bool{
        return $this->aniversarioConta;
    }

    public function getTipoPoupanca(): string{
        return $this->tipoPoupanca;
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    // SETTERS

    public function setTaxaRendimento(float $taxa): void{
        $this->taxaRendimento = $taxa;
    }

    public function setAniversarioConta(bool $aniversario): void{
        $this->aniversarioConta = $aniversario;
    }

    public function setTipoPoupanca(string $tipo): void{
        $this->tipoPoupanca = $tipo;
    }

    public function setCategoria(string $categoria): void{
        $this->categoria = $categoria;
    }

    // MÉTODOS

    public function calcularSaldo(): float{

        $saldo = $this->getSaldo();

        if($this->aniversarioConta){
            $saldo += $saldo * ($this->taxaRendimento / 100);
        }

        return $saldo;

    }

    public function verificarStatus(): bool{

        return $this->getAtiva();

    }

    public function calcularRendimento(): float{

        return $this->getSaldo() * ($this->taxaRendimento / 100);

    }

    public function gerarCodigo(): string{

        return md5(
            $this->getNumero() .
            $this->getTitular() .
            $this->categoria
        );

    }

}