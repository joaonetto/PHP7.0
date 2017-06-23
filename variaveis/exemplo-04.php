<?php

  // 15 - Variáveis Pré-Definidas
  // Escopos super globais
  //
  // Para verificar o resultado utilize:
  // http://localhost/variaveis/exemplo-04.php?a
  //
  // Passar o valor 123 na URL
  // http://localhost/variaveis/exemplo-04.php?a=123
  $nome = $_GET['a'];
  var_dump($nome);

  //Transformando o retorno de A em inteiro
  $nome = (int)$_GET['a'];
  var_dump($nome);
  unset($nome);

  //Recuperando o IP do Cliente
  $ip = $_SERVER['REMOTE_ADDR'];
  var_dump($ip);
  unset($ip);

  //Informacao do Pagina utilizada
  $pagina = $_SERVER['SCRIPT_NAME'];
  var_dump($pagina);
  unset($pagina);

?>
