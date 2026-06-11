<?php
require_once "conta.php";

class ContaPoupanca extends Conta {
    public int $diaAniversario;
     public float $taxaRendimentoMensal;
      public int $diasSemMovimentacao;

      public function creditarRendimento(): void {
    $diaAtual = (int)date('d');

    if ($diaAtual == $this->diaAniversario) {
        $rendimento = $this->saldo * $this->taxaRendimentoMensal;
        $this->saldo += $rendimento;
        echo "Rendimento de R$ $rendimento creditado com sucesso!<br>";
    } else {
        echo "Hoje não é o dia de aniversário da conta. Nenhum rendimento creditado.<br>";
    }
}
      public function preverProximoRendimento() {
    $previsao = $this->saldo * $this->taxaRendimentoMensal;
        echo "Previsão de rendimento para o próximo mês: R$ " . number_format($previsao, 2) . "<br>";
        return $previsao;
    }
      }


