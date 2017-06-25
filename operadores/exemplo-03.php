<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $vermelho = '<font face="verdana" size="3" color="red">';
  $__clodeFont = '</font>';

  //Operadores
  $a = 10;
  $b = 2;

  echo $azul . 'Valor de $a: ' . $__clodeFont . $vermelho . $a . $__clodeFont . '<br>';
  echo $azul . 'Valor de $b: ' . $__clodeFont . $vermelho . $b . $__clodeFont . '<br>';

  // Soma
  echo $azul .'Valor da operação: $a + $b: ' . $__clodeFont . $vermelho . intval($a + $b) . $__clodeFont . '<br>';

  // Subtração
  echo $azul .'Valor da operação: $a - $b: ' . $__clodeFont . $vermelho . intval($a - $b) . $__clodeFont . '<br>';

  // Multiplicação
  echo $azul .'Valor da operação: $a * $b: ' . $__clodeFont . $vermelho . intval($a * $b) . $__clodeFont . '<br>';

  // Divisão
  echo $azul .'Valor da operação: $a / $b: ' . $__clodeFont . $vermelho . intval($a / $b) . $__clodeFont . '<br>';
  echo '<br>';

  // Resto ou Módulo, para caso quando se deseja saber o resto de uma divisão
  $a = 13;
  echo $azul . 'Valor de $a: ' . $__clodeFont . $vermelho . $a . $__clodeFont . '<br>';
  echo $azul . 'Valor de $b: ' . $__clodeFont . $vermelho . $b . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: $a / $b - (Quociente): ' . $__clodeFont . $vermelho . intval($a / $b) . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: $a % $b - (Resto): ' . $__clodeFont . $vermelho . intval($a % $b) . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: $a / $b - (Quociente decimal): ' . $__clodeFont . $vermelho . $a / $b . $__clodeFont . '<br>';

  echo $__clodeFont;
?>
