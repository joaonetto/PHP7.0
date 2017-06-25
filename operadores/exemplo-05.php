<?php

  // Verficar variaveis tipo SpaceShip
  // Utilizando <=>
  // Exemplo:
  // $a = X
  // $b = Y
  // Se A > B  retorna 1
  // Se A == B retorna 0
  // Se A < B retorna -1

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  $a = 50;
  $b = 30;
  echo 'Valor de $a: ' . $a . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  var_dump($a <=> $b);
  echo '<br>';
  echo 'Como A é MAIOR que B, o retorno é 1';
  echo '<br>';
  echo '<br>';

  $a = 30;
  $b = 30;
  echo 'Valor de $a: ' . $a . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  var_dump($a <=> $b);
  echo '<br>';
  echo 'Como A é IGUAL a B, o retorno é 0';
  echo '<br>';
  echo '<br>';

  $a = 20;
  $b = 30;
  echo 'Valor de $a: ' . $a . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  var_dump($a <=> $b);
  echo '<br>';
  echo 'Como A é MENOR que B, o retorno é -1';
  echo '<br>';
  echo '<br>';

  echo $__clodeFont;

?>
