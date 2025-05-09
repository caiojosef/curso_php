<?php

require_once 'Pessoa.php';
require_once 'publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }

    public function detalhes()
    {
        echo "Livro: " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas;
        echo "<br>Sendo lido por " . $this->leitor->__toString(); // Utilizando __toString()
    }


    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        return $this->titulo = $titulo;
         
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        return $this->autor = $autor;
        
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        return $this->totPaginas = $totPaginas;
        
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        return $this->pagAtual = $pagAtual;
        
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        return $this->aberto = $aberto;
        
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        return $this->leitor = $leitor;
        
    }

    public function abrir()
    {
        $this->aberto = true;
    }
    public function fechar()
    {
        $this->aberto = false;
    }
    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avançarPag()
    {
        $this->pagAtual++;
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }
}
