<?php

require_once 'LutadorInfo.php';

class Lutador implements LutadorInfo {
  private $nome;  
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

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
    $this->peso = $this->setPeso($weight);
    $this->vitorias = $wins;
    $this->derrotas = $loses;
    $this->empates = $tie;
  }

  private function getNome() {
    return $this->nome;
  }

  private function getNacionalidade() {
    return $this->nacionalidade;
  }

  private function getIdade() {
    return $this->idade;
  }

  private function getAltura() {
    return $this->altura;
  }

  private function getPeso() {
    return $this->peso;
  }

  private function getCategoria() {
    return $this->categoria;
  }

  private function getVitorias() {
    return $this->vitorias;
  }

  private function getDerrotas() {
    return $this->derrotas;
  }

  private function getEmpates() {
    return $this->empates;
  }

  private function setNome($name) {
    $this->nome = $name;
  }

  private function setNacionalidade($nc) {
    $this->nacionalidade = $nc;
  }

  private function setIdade($age) {
    $this->idade = $age;
  }

  private function setAltura($height) {
    $this->altura = $height;
  }

  private function setPeso($weight) {
    $this->peso = $weight;
    $this->setCategoria($weight);
  }

  private function setCategoria($weight) {

    if ( $weight < 52.2 ) {
      $this->categoria = 'Inválido';
    } elseif ( $weight <= 70.3 ) {
      $this->categoria = 'Leve';
    } elseif ( $weight <= 83.9 ) {
      $this->categoria = 'Médio';
    } elseif ($weight <= 120.2) {
      $this->categoria = 'Pesado';
    } else {
      $this->categoria = 'Inválido';
    }
    
  }

  private function setVitorias($wins) {
    $this->vitorias = $wins;
  }

  private function setDerrotas($loses) {
    $this->derrotas = $loses;
  }

  private function setEmpates($tie) {
    $this->empates = $tie;
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

  public function apresentar() {
    echo "Lutador: {$this->getNome()}, ";
    echo "Origem: {$this->getNacionalidade()}, ";
    echo "Idade: {$this->getIdade()} anos, ";
    echo "Altura: {$this->getAltura()}m de altura, ";
    echo "Pesando: {$this->getpeso()}Kg, ";
    echo "Ganhou: {$this->getVitorias()}m de altura.";
    echo "Altura: {$this->getAltura()}m de altura.";
  }

  public function status() {

  }
  
}

?>