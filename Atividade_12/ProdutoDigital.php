<?php

require_once "Produto.php";

class ProdutoDigital extends Produto {

    private float $tamanhoArquivoMB = 0.0;
    private string $formatoArquivo = "";
    private int $limiteDownloadsPermitidos = 0;
    private string $linkServidorNuvem = "";

    public function getTamanhoArquivoMB(): float {
        return $this->tamanhoArquivoMB;
    }

    public function setTamanhoArquivoMB(float $tamanho): void {
        $this->tamanhoArquivoMB = $tamanho;
    }

    public function getFormatoArquivo(): string {
        return $this->formatoArquivo;
    }

    public function setFormatoArquivo(string $formato): void {
        $this->formatoArquivo = $formato;
    }

    public function getLimiteDownloadsPermitidos(): int {
        return $this->limiteDownloadsPermitidos;
    }

    public function setLimiteDownloadsPermitidos(int $limite): void {
        $this->limiteDownloadsPermitidos = $limite;
    }

    public function getLinkServidorNuvem(): string {
        return $this->linkServidorNuvem;
    }

    public function setLinkServidorNuvem(string $link): void {
        $this->linkServidorNuvem = $link;
    }

    public function calcularPrecoVenda(): float {
        return $this->getPrecoBase() + 2.00;
    }

    public function verificarDisponibilidade(): bool {
        return $this->getIsAtivo()
            && !empty($this->getLinkServidorNuvem());
    }

    public function gerarLinkExclusivo(string $usuario): string {
        return $this->getLinkServidorNuvem() . "/" . $usuario;
    }

    public function revogarAcesso(): void {
        $this->setLinkServidorNuvem("");
    }
}