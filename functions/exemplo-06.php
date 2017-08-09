<?php

  $pessoa = array(
    'nome'  => 'Joao',
    'idade' => 20
  );

  echo '<strong>';
  echo 'Foreach de leitura de Array';
  echo '</strong>';
  echo '<br>';
  foreach ($pessoa as $value) {
    echo $value . '<br>';
  }
  echo 'Valor da Array: ';
  print_r($pessoa);
  echo '<br>';
  echo '<br>';
  echo '<strong>';
  echo 'Foreach para modificar via Referencia uma Array';
  echo '</strong>';
  echo '<br>';
  foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value += 10;
    echo $value . '<br>';
  }
  echo 'Valor da Array: ';
  print_r($pessoa);

 ?>
