<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';
  echo $azul;

  $meses = array(
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
  );

  // Retorna o Mês conforme Array(mes) e retorna a posição na Array(index)
  foreach ($meses as $index => $mes) {
    echo 'O Més é: ' . $mes . '. Que esta na posição ' . $index . ' do Array <br>';
  }

  echo $__clodeFont;

?>
