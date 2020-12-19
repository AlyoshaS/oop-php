<?php

require_once 'ControleRemoto.php';

$controle = new ControleRemoto();
$controle->ligar();
$controle->abrirMenu();
$controle->maisVolume();

?>