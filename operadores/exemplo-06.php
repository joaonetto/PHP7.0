<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  // Operado ?? para Variaveis NULL
  $a = NULL;
  $b = NULL;
  $c = 100;

  echo 'Onde:<br>A=Null, B=Null e C=100 <br>';
  echo 'Com o operador ?? demonstrará apenas a primeira variavel iniciada, que neste caso é C<br>';
  echo 'Com a Operacao A ?? B ?? C, o resultado será C: ';
  echo $a ?? $b ?? $c;
  echo '<br>';
  echo '<br>';

  $a = NULL;
  $b = 8;
  $c = 100;

  echo 'Onde:<br>A=Null, B=8 e C=100 <br>';
  echo 'Com o operador ?? demonstrará apenas a primeira variavel iniciada, que neste caso é B<br>';
  echo 'Com a Operacao A ?? B ?? C, o resultado será B: ';
  echo $a ?? $b ?? $c;



  echo $__clodeFont;

?>
