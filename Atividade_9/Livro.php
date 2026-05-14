<?php

class Livro {
    public string $titulo;
    public string $autor;
    public int $qntPaginas;
    public int $exDisponiveis;

    public function emprestarLivro() {
        if ($this->exDisponiveis > 0) {
            $this->exDisponiveis--;
            echo "Livro emprestado! Estoque agora: " . $this->exDisponiveis . "<br>";
        } else {
            echo "Não há exemplares disponíveis para empréstimo.<br>";
        }
    }

    public function devolverLivro() {
        $this->exDisponiveis++;
        echo "Livro devolvido! Estoque agora: " . $this->exDisponiveis . "<br>";
    }

    public function verificarDisponibilidade() {
        if ($this->exDisponiveis > 0) {
            echo "Estoque disponível! <br>";
        } else {
            echo "Não disponível! <br>";
        }
    }

    public function alterarQuantidadePaginas() {
        $this->qntPaginas += 5;
        echo "Novo número de páginas: " . $this->qntPaginas . "<br>";
    }

    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Quantidade de páginas: " . $this->qntPaginas . "<br>";
        echo "Exemplares disponíveis: " . $this->exDisponiveis . "<br>";
    } 

    public function compararPaginas($livro2, $livro3) {
        $livros = [$this, $livro2, $livro3];

        usort($livros, function($a, $b) {
            return $b->qntPaginas - $a->qntPaginas; // Maior para menor
        });

        echo "Livros do maior para o menor número de páginas:<br>";
        foreach ($livros as $livro) {
            echo $livro->titulo . " - " . $livro->qntPaginas . " páginas<br>";
        }
    }
}