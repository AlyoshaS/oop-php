<?php

require_once "Lutador.php";

class Luta {
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  public function marcarLuta($desafiante, $desafiado) {

    if ($desafiante->getCategoria() === $desafiado->getCategoria() && $desafiante != $desafiado) {
      $this->aprovada = true;
      $this->desafiante = $desafiante;
      $this->desafiado = $desafiado;
    } else {
      $this->aprovada = false;
      $this->desafiante = null;
      $this->desafiado = null;
    }

  }

  public function lutar() {
    if ($this->aprovada) {
      $this->desafiado->apresentar();
      $this->desafiante->apresentar();
      $vencedor = rand(0, 2);

      switch($vencedor) {
        case 0:
          echo "Empatou!";
          $this->desafiado->empatarLuta();
          $this->desafiante->empatarLuta();
          break;
        case 1:
          echo "{$this->desafiado->getNome()} venceu!";
          $this->desafiado->ganharLuta();
          $this->desafiante->perderLuta();
          break;
        case 2:
          echo "{$this->desafiante->getNome()} venceu";
          $this->desafiante->ganharLuta();
          $this->desafiado->perderLuta();
          break;
      } 
    } else {
      echo "Luta não pode acontecer";
    }

  }

  public function getDesafiado() {
    return $this->desafiado;
  }

  public function getDesafiante() {
    return $this->desafiante;
  }

  public function getRounds() {
    return $this->rounds;
  }

  public function getAprovada() {
    return $this->aprovada;
  }

  public function setDesafiado($desafiado){
    $this->desafiado = $desafiado;
  }

  public function setDesafiante($desafiante){
    $this->desafiante = $desafiante;
  }

  public function setRounds($rounds) {
    $this->rounds = $rounds;
  }

  public function setAprovada($aprovada) {
    $this->aprovada = $aprovada;
  }

}

?>