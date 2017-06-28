<?php

  session_start();
  echo $_SESSION['nome'];
  echo $session_id;

  // session_unset(); // Limpa as variaves da Sessao

  session_destroy(); // Apaga a sessao.

?>
