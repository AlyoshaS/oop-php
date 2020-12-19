<?php
class Caneta {
  public $modelo;
  private $cor;
  private $ponta;
  private $tampada;

  // Métodos construtores podem ter o mesmo nome da classe ou __construct
  public function Caneta($modelo, $cor, $ponta) { 
    $this->setModelo($modelo);
    $this->setCor($cor);
    $this->setPonta($ponta);
    $this->tampar();
  }
 
  public function tampar() {
    $this->tampada = true;
  }

  public function getCor() {
    return $this->cor;
  }

  public function setCor($cor) {
    $this->cor = $cor;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function getPonta() {
    return $this->ponta;
  }

  public function setPonta($ponta) {
    $this->ponta = $ponta;
  }
}
?>