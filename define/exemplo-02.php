<?php

  // Usualmente a Constante é maiuscula
  define('BD', [
    '127.0.0.1',
    'root',
    'Laboratorio',
    'bd_name',
    'Nome da Array: BD'
  ]);

  echo '<pre>';
  print_r(BD);
  echo '<br>';

  // No caso abaixo, o TRUE informa a opção Case Sensitive.
  define('Bd', [
    '127.0.0.1',
    'root',
    'Laboratorio',
    'bd_name',
    'Nome da Array: Bd'
  ], true);
  print_r(Bd);

  echo '</pre>';

?>
