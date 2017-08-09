<?php

  require_once('config.php');
  echo session_save_path();
  switch (session_status()) {
    case PHP_SESSION_DISABLED:
      $estadoSessao = 'Sessoes desabilitadas.';
      break;

    case PHP_SESSION_NONE:
      $estadoSessao = 'Sessoes habilitadas, porem nenhuma existe.';
      break;

    case PHP_SESSION_ACTIVE:
      $estadoSessao = 'Sessoes habilitadas, pelo menos 1(uma) existe.';
      break;
  }

  echo 'O estado da Sessão é: ' . $estadoSessao;

 ?>
