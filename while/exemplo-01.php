<?php

  // While: Muito utilizado para DB
  // Enquanto verdade continua a execucao

  $condicao = true;

  while($condicao) {

    $numero = rand(1,10);
    if ($numero === 3 ){

      echo 'Três !!!';
      $condicao = false;

    }
    echo "Numero Sortiado: $numero <br>";

  }

?>
