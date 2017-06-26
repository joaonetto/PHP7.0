<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';
  echo $azul;

  // O laço FOR onde:
  // 1o = Inicio de variavel e inicia variavel
  // 2o = Até uma condição
  // 3o = O proximo valor de $i
  for ($i = 0; $i < 10; $i++){
    echo 'O Valor de $i é: ' . $i . '<br>';
  }
  echo '<br>';

  // $i incrementa 5
  for ($i = 0; $i < 1000; $i += 5){
    echo 'O Valor de $i é: ' . $i . '<br>';
  }
  echo '<br>';

  // $i incrementa 5 e se não apresenta > 200 e < 800
  for ($i = 0; $i < 1000; $i += 5){
    if ($i > 200 && $i < 800) continue;
      echo 'O Valor de $i é: ' . $i . '<br>';
  }
  echo '<br>';

  // $i incrementa 5 e se não apresenta > 200 e < 800
  // Mas se $i for igual a 900 parar o laço FOR com Break
  for ($i = 0; $i < 1000; $i += 5){
    if ($i > 200 && $i < 800) continue;
    // Abaixo o valor e o tipo são comparados
    if ($i == 900) break;
      echo 'O Valor de $i é: ' . $i . '<br>';
  }

  echo $__clodeFont;

?>
