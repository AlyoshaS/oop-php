<?php

class Professor extends Pessoa {
  private $especialidade;
  private $salario;

  public function receberAumento() {
    // ...
  }

  public function getEspecialidade() {
    return $this->especialidade;
  }

  public function getSalario() {
    return $this->salario;
  }

  public function setEspecialidade($especialidade) {
    $this->especialidade = $especialidade;
  }

  public function setSalario($salario) {
    $this->salario = $salario;
  }
}

?>
