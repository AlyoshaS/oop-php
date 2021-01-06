<?php

class Lutador {
  private $nome;  
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;


  public function apresentar() {
    echo "Chegou a hora! O lutador {$this->getNome()} ";
    echo "veio diretamente de {$this->getNacionalidade()}, ";
    echo "tem {$this->getIdade()} anos, ";
    echo "pesa {$this->getpeso()}Kg, ";
    echo "e {$this->getAltura()}m de altura. ";
    echo "Ele tem {$this->getVitorias()} vitórias, ";
    echo "{$this->getDerrotas()} derrotas e {$this->getEmpates()} empates!";
  }

  public function status() {
    echo "{$this->getNome()} ";
    echo "é um peso {$this->getCategoria()}, ";
    echo "já ganhou {$this->getVitorias()} vezes, ";
    echo "perdeu {$this->getDerrotas()} vezes e ";
    echo "teve {$this->getEmpates()} empates.";
  }

  public function ganharLuta() {
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta() {
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta() {
    $this->setEmpates($this->getEmpates() + 1);
  }

  public function __construct(
    $name,
    $nc,
    $age,
    $height,
    $weight,
    $wins,
    $loses,
    $tie
  ) {
    $this->nome = $name;
    $this->nacionalidade = $nc;
    $this->idade = $age;
    $this->altura = $height;
    $this->setPeso($weight);
    $this->peso = $weight;
    $this->vitorias = $wins;
    $this->derrotas = $loses;
    $this->empates = $tie;
  }

  function getNome() {
    return $this->nome;
  }

  function getNacionalidade() {
    return $this->nacionalidade;
  }

  function getIdade() {
    return $this->idade;
  }

  function getAltura() {
    return $this->altura;
  }

  function getPeso() {
    return $this->peso;
  }

  function getCategoria() {
    return $this->categoria;
  }

  function getVitorias() {
    return $this->vitorias;
  }

  function getDerrotas() {
    return $this->derrotas;
  }

  function getEmpates() {
    return $this->empates;
  }

  function setNome($name) {
    $this->nome = $name;
  }

  function setNacionalidade($nc) {
    $this->nacionalidade = $nc;
  }

  function setIdade($age) {
    $this->idade = $age;
  }

  function setAltura($height) {
    $this->altura = $height;
  }

  function setPeso($weight) {
    $this->peso = $weight;
    $this->setCategoria();
  }

  function setCategoria() {
    $weight = $this->peso;

    if ( $weight < 52.2 ) {
      $this->categoria = 'inválido';
    } elseif ( $weight <= 70.3 ) {
      $this->categoria = 'leve';
    } elseif ( $weight <= 83.9 ) {
      $this->categoria = 'médio';
    } elseif ($weight <= 120.2) {
      $this->categoria = 'pesado';
    } else {
      $this->categoria = 'inválido';
    }

  }

  function setVitorias($wins) {
    $this->vitorias = $wins;
  }

  function setDerrotas($loses) {
    $this->derrotas = $loses;
  }

  function setEmpates($tie) {
    $this->empates = $tie;
  }

}

?>