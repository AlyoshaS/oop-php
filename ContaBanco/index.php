<?php
require_once 'ContaBanco.php';

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