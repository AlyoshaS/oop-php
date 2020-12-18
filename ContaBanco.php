<?php

class ContaBanco {
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;
  
  public function abrirConta($tipoDeConta) {
    $this->setTipo($tipoDeConta);
    $this->setStatus(true);

    if($tipoDeConta === "CC") {
      return $this->setSaldo(50);
    } else {
      return $this->setSaldo(150);
    }

  }

  public function fecharConta() {
    if($this->getSaldo() > 0) {
      echo "Para fechar sua conta, você precisará sacar todo seu dinheiro!";
    } elseif ($this->getSaldo() < 0) {
      echo "Para fechar sua conta, você precisará pagar todo débito pendente!";
    } else {
      $this->setStatus(false);
    }

  }

  public function depositar($deposito) {
    if ($this->getStatus()) {
      $this->saldo =+ $deposito;
    } else {
      echo "Contas fechadas não podem receber depósitos";
    }
  }

  public function sacar($valor) {
    if ($this->getStatus() && $this->getSaldo() > 0 && $valor < $this->getSaldo()) {
      $this->saldo =- $valor;
    } elseif ($this->getStatus() && $this->getSaldo() > 0 && $valor > $this->getSaldo()) {
      echo "Seu saldo é insuficiente para realizar essa operação";
    } else {
      echo "Contas fechadas não podem receber depósitos";
    };
  }

  public function pagarMensalidade() {
    $mensalidade = 0;

    if($this->getTipo() == "CC") {
      $mensalidade = $mensalidade + 12;
    } elseif($this->getTipo() == "CP") {
      $mensalidade = $mensalidade + 20;
    }

    if ($this->getStatus()) {
      if($this->getSaldo() > $mensalidade) {
        $this->saldo = $this->saldo - $mensalidade;
      } else {
        echo "Saldo insuficiente.";
      }
    } else {
      echo "Conta fechada";
    }

  }

  // Métodos especiais:
  public function __construct() {
    $this->status = false;
    $this->saldo = 0;
  }

  public function setNumConta($n) {
    $this->numConta = $n;
  }

  public function getNumConta() {
    return $this->numConta;
  }

  public function setTipo($tipoDeConta) {
    $this->tipo = $tipoDeConta;
  }

  public function getTipo() {
    return $this->tipo;
  }

  public function setDono($dono) {
    $this->dono = $dono;
  }

  public function getDono() {
    return $this->dono;
  }

  public function setSaldo($valor) {
    $this->depositar($valor);
  }

  public function getSaldo() {
    return $this->saldo;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getStatus() {
    return $this->status;
  }

}

?>