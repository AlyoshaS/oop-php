<?php

class Funcionario extends Pessoa {
  private $setor;
  private $trabalhando;

  public function mudarTrabalho() {
    // ...
  }

  public function getSetor() {
    return $this->setor;
  }

  public function getTrabalhando() {
    return $this->trabalhando;
  }

  public function setSetor($setor) {
    $this->setor = $setor;
  }

  public function setTrabalhando($trabalhando) {
    $this->trabalhando = $trabalhando;
  }
}
