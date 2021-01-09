<?php

require_once("Pessoa.php");
require_once("Publicacao.php");

class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $totalPaginas;
  private $paginaAtual;
  private $aberto;
  private $leitor;

  function __construct(
    $titulo,
    $autor,
    $totalPaginas,
    $leitor
  ) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totalPaginas = $totalPaginas;
    $this->setLeitor($leitor);
    $this->fechar();
  }

  function abrir() {
    $this->setAberto(true);
  }

  function fechar() {
    $this->aberto = false;
  }

  function folhear() {
    if(!$this->getAberto()) {
      $this->setAberto();
      $this->getPaginaAtual() + rand(0, 10);
    }
  }

  function avançarPagina() {

    //verificar aberto?
    if ($this->getPaginaAtual() < $this->getTotalPaginas()) {
      $pagina = $this->getPaginaAtual() + 1;
      $this->setPaginaAtual($pagina);
    } else {
      echo "Última página do livro!";
    }
  }

  function voltarPagina() {
    $pagina = $this->getPaginaAtual() - 1;
    $this->setPaginaAtual($pagina);
  }


  function detalhes() {
    echo "Olá {$this->leitor->getNome()}! Você está lendo {$this->titulo} escrito por {$this->autor}";
    echo " e ele tem {$this->totalPaginas}";
    if ($this->aberto && $this->paginaAtual > 0) {
      echo "Você parou na página {$this->paginaAtual}. Bora continuar?";
    }
  }

  function getTitulo() {
    return $this->titulo;
  }

  function getAutor() {
    return $this->autor;
  }

  function getTotalPaginas() {
    return $this->totalPaginas;
  }

  function getPaginaAtual() {
    return $this->paginaAtual;
  }

  function getAberto() {
    return $this->aberto;
  }

  function getLeitor() {
    return $this->leitor;
  }

  function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  function setAutor($autor) {
    $this->autor = $autor;
  }

  function setTotalPaginas($totalPaginas) {
    $this->totalPaginas = $totalPaginas;
  }

  function setPaginaAtual($paginaAtual) {
    $this->paginaAtual = $paginaAtual;
  }

  function setAberto() {
    $this->aberto = true;
  }

  function setLeitor($leitor) {
    $this->leitor = $leitor;
  }

}

?>
