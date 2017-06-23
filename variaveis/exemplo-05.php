<?php

  $nome = 'JN';

  // Na função abaixo a função coloca $nome de forma global, ou seja,
  // a variável $nome será aceita na função teste.
  // Caso esta mesma variável seja utiliza em teste2 sem a declaração global,
  // ela será considerada com erro.
  function teste(){
      global $nome;
      echo $nome;
      echo '<br>';
  }

  function teste2(){
    //Neste caso $nome, é NULL
    if (!isset($nome)) {
      echo 'A variável $nome não foi declarada, valor NULL';
    }
    var_dump($nome);
  }

  teste();
  teste2();

?>
