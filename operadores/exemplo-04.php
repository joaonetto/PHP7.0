<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  $a = 30;
  $b = 55;

  // Atributos para comparações de Variáveis

  echo $azul;
  echo 'Valor de $a: ' . $a . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  echo 'A > B ? ';
  var_dump($a > $b);
  echo '<br>';

  echo 'A < B ? ';
  var_dump($a < $b);
  echo '<br>';
  echo '<br>';

  echo 'A = B ? ';
  var_dump($a = $b);
  echo '<br>';
  echo 'Verifique que o valor foi INT(55), pois A recebeu o Valor de B. Não houve comparação entre A e B. Para isto é necessário ==';
  echo '<br>';
  echo 'Um único = é ATRIBUIÇÃO';
  echo '<br>';
  echo 'Veja que o valor de A passou a ser de B: ' . $a;
  echo '<br>';
  echo '<br>';

  // == Siginifica Operador de Igualdade de Valor
  $a = 30;
  echo 'Valor de $a: ' . $a . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  echo 'A == B ? ';
  var_dump($a == $b);
  echo '<br>';
  echo 'Para que haja COMPARAÇÃO é necessário ==';
  echo '<br>';
  echo '== Siginifica Operador de Igualdade de Valor';
  echo '<br>';
  echo '<br>';

  // === Significa Operador de Igualdade de Identidade
  $a = 50.0;
  $b = 50;
  echo 'Valor de $a: ' . number_format((float)$a, 2, '.', '') . '<br>';
  echo 'Valor de $b: ' . $b . '<br>';
  echo 'A == B ? ';
  var_dump($a == $b);
  echo '<br>';
  echo 'Veja que apesar de TRUE entre as variáveis, elas são diferentes, onde:';
  echo '<br>';
  echo 'A é Float com valor de 50.00 e B é Inteiro com valor 50';
  echo '<br>';
  echo 'Para elevar a comparação entre as variáveis e compará-las se são de mesmo tipo, utilize ===';
  echo '<br>';
  echo '=== Significa Operador de Igualdade de Identidade';
  echo '<br>';
  echo 'Utilizando === retornará False, pois A = Float e B = Integer';
  echo '<br>';
  echo 'A === B ? ';
  var_dump($a === $b);
  echo '<br>';
  echo '<br>';

  // Não igual !=
  $a = 50.0;
  $b = 50;
  echo 'Valor de $a: ';
  var_dump($a);
  echo '<br>';
  echo 'Valor de $b: ';
  var_dump($b);
  echo '<br>';
  echo 'A != (Diferente Valor) B ? ';
  var_dump($a != $b);
  echo '<br>';
  echo 'A !== (Diferente de Tipo) B ?';
  var_dump($a !== $b);
  echo '<br>';



  echo $__clodeFont;



?>
