<?php
require_once "Produto.php";

class ProdutoDigital extends Produto {
    protected float $tamanhoArquivoMB = 0.0;
    protected string $formatoArquivo = "";
    protected int $limiteDownloadsPermitidos = 0;
    protected string $linkServidorNuvem = "";

    public function getTamanhoArquivoMB(): float { return $this->tamanhoArquivoMB; }
    public function setTamanhoArquivoMB(float $tamanho): void { $this->tamanhoArquivoMB = $tamanho; }

    public function getFormatoArquivo(): string { return $this->formatoArquivo; }
    public function setFormatoArquivo(string $formato): void { $this->formatoArquivo = $formato; }

    public function getLimiteDownloadsPermitidos(): int { return $this->limiteDownloadsPermitidos; }
    public function setLimiteDownloadsPermitidos(int $limite): void { $this->limiteDownloadsPermitidos = $limite; }

    public function getLinkServidorNuvem(): string { return $this->linkServidorNuvem; }
    public function setLinkServidorNuvem(string $link): void { $this->linkServidorNuvem = $link; }

    public function calcularPrecoVenda(): float {
        return $this->getPrecoBase() + 2.00;
    }

    public function verificarDisponibilidade(): bool {
        return ($this->getIsAtivo() && $this->getLinkServidorNuvem() != "");
    }

   public function gerarLinkExclusivo(string $idUsuario): string {
        $now = date("Y-m-d H:i:s"); 
        $token = md5($idUsuario . $now);
        $linkFinal = "{$this->getLinkServidorNuvem()}/download?token={$token}&fmt={$this->getFormatoArquivo()}";
        
        echo "Link de download gerado com sucesso!<br>";
        return $linkFinal;
    }

    public function revogarAcesso(string $idUsuario): void {
        echo "Acesso do usuário {$idUsuario} ao arquivo .{$this->getFormatoArquivo()} revogado.<br>";
    }
}