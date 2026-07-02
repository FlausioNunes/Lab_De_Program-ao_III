<?php

abstract class Conta
{

    private int $numero;
    private string $titular;
    private float $saldo;
    private bool $ativa;
    private string $agencia;
    private float $limite;

    public function __construct(
        int $numero,
        string $titular,
        float $saldo,
        bool $ativa,
        string $agencia,
        float $limite
    ){

        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->ativa = $ativa;
        $this->agencia = $agencia;
        $this->limite = $limite;

    }

    // GETTERS

    public function getNumero(): int{
        return $this->numero;
    }

    public function getTitular(): string{
        return $this->titular;
    }

    public function getSaldo(): float{
        return $this->saldo;
    }

    public function getAtiva(): bool{
        return $this->ativa;
    }

    public function getAgencia(): string{
        return $this->agencia;
    }

    public function getLimite(): float{
        return $this->limite;
    }

    // SETTERS

    public function setTitular(string $titular): void{
        $this->titular = $titular;
    }

    public function setSaldo(float $saldo): void{
        $this->saldo = $saldo;
    }

    public function setAtiva(bool $ativa): void{
        $this->ativa = $ativa;
    }

    public function setAgencia(string $agencia): void{
        $this->agencia = $agencia;
    }

    public function setLimite(float $limite): void{
        $this->limite = $limite;
    }

    // MÉTODOS

    public function ativar(): void{

        if(!$this->ativa){
            $this->ativa = true;
        }

    }

    public function desativar(): void{

        $this->ativa = false;

    }

    public function depositar(float $valor): void{

        if($valor > 0){

            $this->saldo += $valor;

        }

    }

    public function sacar(float $valor): void{

        if($valor > 0 && $valor <= ($this->saldo + $this->limite)){

            $this->saldo -= $valor;

        }

    }

    abstract public function calcularSaldo(): float;

    abstract public function verificarStatus(): bool;

}