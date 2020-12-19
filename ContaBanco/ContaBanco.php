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

    if ($tipoDeConta === "CC") {
      return $this->setSaldo(50);
    } elseif ($tipoDeConta === "CP")  {
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
      echo "Conta de {$this->getDono()} fechada com sucesso!";
    }

  }

  public function depositar($deposito) {

    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $deposito);
      echo "Depósito de $deposito reais autorizado na conta de {$this->getDono()}";
    } else {
      echo "Contas fechadas não podem receber depósitos";
    }

  }

  public function sacar($valor) {

    if ($this->getStatus()) {

      if ($this->getSaldo() >= $valor) {
        $this->setSaldo($this->getSaldo() - $valor);
        echo "Saque de $valor reais autorizado na conta de {$this->getDono()}";
      } else {
        echo "Seu saldo é insuficiente para realizar essa operação";
      }

    } else {
      echo "Contas fechadas não podem receber depósitos";
    };
  }

  public function pagarMensalidade() {

    if($this->getTipo() == "CC") {
      $mensalidade = 12;
    } elseif($this->getTipo() == "CP") {
      $mensalidade = 20;
    }

    if ($this->getStatus()) {

      if($this->getSaldo() > $mensalidade) {
        $this->setSaldo($this->getSaldo() - $mensalidade);
        echo "Mensalidade de $mensalidade reais debitada na conta de {$this->getDono()}";
      } else {
        echo "Saldo insuficiente.";
      }

    } else {
      echo "Conta fechada";
    }

  }

  // Métodos especiais:
  public function __construct() {
    $this->setStatus(false);
    $this->setSaldo(0);
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
    $this->saldo = $valor;
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