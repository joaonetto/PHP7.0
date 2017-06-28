<?php

  $total = 190;
  $desconto = 0.9;

  do {
    $total *= $desconto;

  } while ($total > 100);

  echo 'O Valor total do Desconto: ' . $total;

?>
