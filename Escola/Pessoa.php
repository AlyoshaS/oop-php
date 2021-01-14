<?php

class Pessoa {
  private $nome; //caractere
  private $idade; //inteiro
  private $sexo; //caractere

  public function fazerAniver() {
    $aniver =  $this->getIdade() + 1;
    $this->setIdade($aniver);
  }

  public function getNome() {
    return $this->nome;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function getSexo() {
    return $this->sexo;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setIdade($idade) {
    $this->idade = $idade;
  }

  public function setSexo($sexo) {
    $this->sexo = $sexo;
  }

}

?>