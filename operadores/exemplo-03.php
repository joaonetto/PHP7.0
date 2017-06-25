<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $verde = '<font face="verdana" size="3" color="gren">';
  $vermelho = '<font face="verdana" size="3" color="red">';
  $__clodeFont = '</font>';

  //Operadores
  $a = 10;
  $b = 2;

  echo $azul . 'Valor de $a: ' . $__clodeFont . $vermelho . $a . $__clodeFont . '<br>';
  echo $azul . 'Valor de $b: ' . $__clodeFont . $vermelho . $b . $__clodeFont . '<br>';

  // Soma
  echo $azul .'Valor da operação - Soma: ' . $__clodeFont . $verde . '$a + $b: ' . $__clodeFont . $vermelho . intval($a + $b) . $__clodeFont . '<br>';

  // Subtração
  echo $azul .'Valor da operação - Subtração:' . $__clodeFont . $verde . '$a - $b: ' . $__clodeFont . $vermelho . intval($a - $b) . $__clodeFont . '<br>';

  // Multiplicação
  echo $azul .'Valor da operação - Multiplicacao:' . $__clodeFont . $verde . '$a * $b: ' . $__clodeFont . $vermelho . intval($a * $b) . $__clodeFont . '<br>';

  // Divisão
  echo $azul .'Valor da operação - Divisão:' . $__clodeFont . $verde . '$a / $b: ' . $__clodeFont . $vermelho . intval($a / $b) . $__clodeFont . '<br>';
  echo '<br>';

  // Elevado
  echo $azul .'Valor da operação - Elevado:' . $__clodeFont . $verde . '$a ** $b: ' . $__clodeFont . $vermelho . intval($a / $b) . $__clodeFont . '<br>';
  echo '<br>';

  // Resto ou Módulo, para caso quando se deseja saber o resto de uma divisão
  $a = 13;
  echo $azul . 'Valor de $a: ' . $__clodeFont . $vermelho . $a . $__clodeFont . '<br>';
  echo $azul . 'Valor de $b: ' . $__clodeFont . $vermelho . $b . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: ' . $__clodeFont . $verde . '$a / $b - (Quociente): ' . $__clodeFont . $vermelho . intval($a / $b) . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: ' . $__clodeFont . $verde . '$a % $b - (Resto): ' . $__clodeFont . $vermelho . intval($a % $b) . $__clodeFont . '<br>';
  echo $azul . 'Valor da operação: ' . $__clodeFont . $verde . '$a / $b - (Divisão): ' . $__clodeFont . $vermelho . $a / $b . $__clodeFont . '<br>';

  echo $__clodeFont;
?>
