<?php

  //Recupera uma ID já existente
  session_id('c3c95482e06496b35f19b4e28db69b3b');

  // Cria / Gera um novo session_id
  require_once('config.php');
  session_regenerate_id();
  echo session_id();
  var_dump($_SESSION);

?>
