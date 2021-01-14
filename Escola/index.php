<?php
require_once("Aluno.php");
require_once("Funcionario.php");
require_once("Pessoa.php");
require_once("Professor.php");

$p1 = new Pessoa("pedro", 22, "M");
$p2 = new Aluno("maria", 31, "F");
$p3 = new Professor("maria", 31, "F");
$p4 = new Funcionario("maria", 31, "F");

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Cláudio");
$p4->setNome("Fabiana");

$p2->setCurso("Informática");
$p3->setSalario(2500.75);
$p4->setSetor("Estoque");

$p3->receberAumento(550,20);
$p4->mudarTrabalho("");// parado ou trabalhando
$p2->cancelarMatricula();

// print_r($p1);

?>
