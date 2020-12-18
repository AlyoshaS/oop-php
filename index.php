<?php
  require_once 'Caneta.php';
  require_once 'ContaBanco.php';

  // Utilizando getters e setters - antes de adicionar o método construct, foi possível exacutar esse código
  // após criarmos o construct, você precisa passar os parâmetros.
  // $c1 = new Caneta();
  // $c1->setModelo("BIC");
  // $c1->setPonta(0.5);
  // print "Eu tenho uma caneta { $c1->getModelo() } de ponta { $c1->getPonta() }";


  // $c1 = new Caneta("BIC", "Azul", 0.5);
  // $c2 = new Caneta("BICs", "Verde", 1.0);
  // print_r($c1);
  // print_r($c2);

  $jubis = new ContaBanco();
  $jubis->abrirConta("CC");
  $jubis->setDono("Jubis");

  $creuzita = new ContaBanco();
  $creuzita->abrirConta("CP");
  $creuzita->setDono("Creuzita");

  $jubis->depositar(200);
  $creuzita->depositar(500);

  $creuzita->sacar(100);

  $jubis->pagarMensalidade();
  $creuzita->pagarMensalidade();

  $jubis->sacar(238);
  $creuzita->sacar(530);

  $jubis->fecharConta();
  $creuzita->fecharConta();

  print_r($jubis);
  print_r($creuzita);

  
?>