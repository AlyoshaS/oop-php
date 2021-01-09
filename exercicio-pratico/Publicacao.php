<?php

interface Publicacao {
  public function abrir();
  public function fechar();
  public function folhear($pagina);
  public function avançarPagina();
  public function voltarPagina();
}

?>