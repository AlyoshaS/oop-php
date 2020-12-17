<?php
class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar() {
    if ($this->tampada) {
      echo "Erro. A caneta está tampada!";
    } else {
      echo "Rabiscando...";
    }
  }

  public function tampar() {
    $this->tampada = true;
  }

  public function destampar() {
    $this->tampada = false;
  }
}
?>