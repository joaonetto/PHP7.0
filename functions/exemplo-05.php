<?php

  $a = 10;

  function trocaValor1($a){
    $a += 50;
    return $a;
  }

  function trocaValor2(&$a){
    $a += 50;
    return $a;
  }

  echo '<strong>';
  echo 'Funções por passagem de Parametro';
  echo '</strong>';
  echo '<br>';
  echo 'Valor de A (Fora da Função): ' . $a;
  echo '<br>';
  echo 'Valor de A (Executa a Funcão): ' . trocavalor1($a);
  echo '<br>';
  echo 'Valor de A (Após Função): ' . $a;
  echo '<br>';
  echo '<br>';

  echo '<strong>';
  echo 'Funções por passagem de Referencia';
  echo '</strong>';
  echo '<br>';
  echo 'Valor de A (Fora da Função): ' . $a;
  echo '<br>';
  echo 'Valor de A (Executa a Funcão): ' . trocavalor2($a);
  echo '<br>';
  echo 'Valor de A (Após Função): ' . $a;
  echo '<br>';

 ?>
