<?php

interface Publicacao {
  public function abrir();
  public function fechar();
  public function folhear();
  public function avançarPagina();
  public function voltarPagina();
}

?>