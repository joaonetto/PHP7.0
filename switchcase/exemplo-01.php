<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';
  echo $azul;

  // O Switch Case é utilizado para condições onde se sabe o pesquisa, ou seja igual(=)
  $diaSemana = date('w');
  switch ($diaSemana) {
    case 0:
      echo 'Domingo';
      break;

    case 1:
      echo 'Segunda-feira';
      break;

    case 2:
      echo 'Terça-feira';
      break;

    case 3:
      echo 'Quarta-feira';
      break;

    case 4:
      echo 'Quinta-feira';
      break;

    case 5:
      echo 'Sexta-feira';
      break;

    case 6:
      echo 'Sábado';
      break;

    /* Defaut é quando os casos acima não tem match e o default será acionado
    default:
      echo 'Outro';
      break;
    */
  }
  echo $__clodeFont;

?>
