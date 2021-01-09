<?php
require_once("Pessoa.php");
require_once("Livro.php");

$eve = new Pessoa("eve", 30, "muié");
// var_dump($eve);
// $eve->fazerAniver();
// var_dump($eve->getIdade());
$livro = new Livro("titulero", "autorzero", 300, $eve);

var_dump($livro->getAberto());
?>