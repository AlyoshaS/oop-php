<?php
require_once("Pessoa.php");
require_once("Livro.php");

// $eve = new Pessoa("eve", 30, "muié");
// var_dump($eve);
// $eve->fazerAniver();
// var_dump($eve->getIdade());
// $livro = new Livro("titulero", "autorzero", 300, $eve);

// var_dump($livro->getAberto());
// var_dump($livro->getPaginaAtual());
// var_dump($livro->avançarPagina());
// var_dump($livro->getPaginaAtual());
// var_dump($livro->folhear());
// var_dump($livro->setPaginaAtual(299));
// var_dump($livro->avançarPagina());
// var_dump($livro->getPaginaAtual());
// var_dump($livro->avançarPagina());

$p[0] = new Pessoa("pedro", 22, "M");
$p[1] = new Pessoa("maria", 31, "F");

$l[0] = new Livro("PHP Básico", "Zé da Silva", 300, $p[0]);
$l[1] = new Livro("POO com PHP", "Maria Souza", 500, $p[0]);
$l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

// print_r($l[0]->detalhes());
// print_r($l[0]->folhear(80));
// print_r($l[0]->voltarPagina());
// print_r($l[0]->detalhes());

print_r($l[2]->detalhes());
?>