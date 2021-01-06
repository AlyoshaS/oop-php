<?php

require_once 'Lutador.php';

$Lutadores = array();

$Lutadores[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
$Lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$Lutadores[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
$Lutadores[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
$Lutadores[4] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
$Lutadores[4] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

$Lutadores[3]->perderLuta();
// $Lutadores[3]->apresentar();
// $Lutadores[3]->status();

// $Lutadores[2]->status();
// $Lutadores[3]->getCategoria();
// $Lutadores[1]->ganharLuta();
// $Lutadores[0]->empatarLuta();

?>
