<?php

  require_once('config.php');
  echo $_SESSION['nome'];

  // Limpa as variaves da Sessao
  // session_unset();

  // Apaga a sessao.
  //(Limpa a Variavel de Sessão e Destroi o usuário)
  session_destroy();


?>
