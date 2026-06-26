<?php
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";

echo "<pre>";

echo "<h2>--- TESTE: PRODUTO FÍSICO (Encapsulado) ---</h2>";

$celular = new ProdutoFisico();
$celular->setCodigo(1234);
$celular->setNome("Celphone Pro Max 2026");
$celular->setPrecoBase(5000.00);
$celular->setQuantidadeEstoque(5);
$celular->setIsAtivo(true);
$celular->setDimensoesCxLxA("16x8x5");
$celular->setCustoFreteFixo(65.00);
$celular->setTransportadoraParceira("LogTech Express");

$celular->aplicarDesconto(10);
echo "Preço de Venda Final: R$ " . $celular->calcularPrecoVenda() . "<br>";
$celular->calcularVolumeCubico();

print_r($celular);

echo "<hr>";

echo "<h2>--- TESTE: PRODUTO DIGITAL (Encapsulado) ---</h2>";

$ebook = new ProdutoDigital();
$ebook->setCodigo(2002);
$ebook->setNome("E-book Desenvolvimento Web PHP");
$ebook->setPrecoBase(49.90);
$ebook->setIsAtivo(true); 
$ebook->setTamanhoArquivoMB(14.5);
$ebook->setFormatoArquivo("pdf");
$ebook->setLinkServidorNuvem("https://cdn.meusite.com/arquivos");
$ebook->setLimiteDownloadsPermitidos(3);

echo "Preço de Venda Final (com Gateway): R$ " . $ebook->calcularPrecoVenda() . "<br>";

if ($ebook->verificarDisponibilidade()) {
    echo "Produto disponível para entrega imediata!<br>";
    $linkGerado = $ebook->gerarLinkExclusivo("user_789");
    echo "Link de acesso do cliente: " . $linkGerado . "<br>";
}

$ebook->revogarAcesso("user_789");

print_r($ebook);

echo "</pre>";