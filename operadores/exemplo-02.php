<?php

  // Utilizando o += é adicionar a uma variável existente um outro valor,
  // ele substitui a necessidade de chamar a variavel com operador.
  $valorTotal = 0;
  $valorTotal += 100;
  $valorTotal +=25;

  echo 'Valor de += ' . $valorTotal;
  echo '<br>';

  // O mesmo acontece com o -=, veja abaixo o efeito contrário da expressão anterior
  $valorTotal = 125;
  $valorTotal -= 100;
  $valorTotal -=25;

  echo 'Valor de -= ' . $valorTotal;
  echo '<br>';

  // O operador *= multiplica um valor a variável existente
  // No exemplo abaixo a variável $valorTotal terá 10% de seu valor
  $valorTotal = 125;
  $valorTotal *= .1;

  echo 'Valor de *= ' . $valorTotal;

?>
