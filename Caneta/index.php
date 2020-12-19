<?php
  require_once 'Caneta.php';

  // Utilizando getters e setters - antes de adicionar o método construct, foi possível exacutar esse código
  // após criarmos o construct, você precisa passar os parâmetros.
  $c1 = new Caneta();
  $c1->setModelo("BIC");
  $c1->setPonta(0.5);
  print "Eu tenho uma caneta { $c1->getModelo() } de ponta { $c1->getPonta() }";


  $c1 = new Caneta("BIC", "Azul", 0.5);
  $c2 = new Caneta("BICs", "Verde", 1.0);
  print_r($c1);
  print_r($c2);

?>