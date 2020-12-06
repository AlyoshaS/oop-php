<?php
  require_once 'Caneta.php';

  $c1 = new Caneta();
  $c1->cor = "Azul";
  $c1->ponta = 0.5;
  $c1->tampada = false;
  $c1->tampar();
  $c1->rabiscar();
  var_dump($c1);

  $c2 = new Caneta();
  $c2->cor = "Verde";
  $c2->carga = 50;
  $c2->tampar();
  var_dump($c2);
?>