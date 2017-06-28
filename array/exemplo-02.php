<?php

  // O Array abaixo é chamado Bidimensional
  $carros[0][0] = 'GM';
  $carros[0][1] = 'Cobalt';
  $carros[0][2] = 'GM';
  $carros[0][3] = 'Camaro';

  $carros[1][0] = 'Ford';
  $carros[1][1] = 'Fiesta';
  $carros[1][2] = 'Fusion';
  $carros[1][3] = 'Eco Esport';

  echo '<pre>';
  print_r($carros);
  echo '</pre>';
  echo end($carros[1]);

?>
