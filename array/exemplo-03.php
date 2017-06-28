<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;


  $pessoas = array();

  array_push($pessoas, array (

    'nome' => 'XyZ',
    'idade' => '30'
  ));

  array_push($pessoas, array (

    'nome' => 'KyZ',
    'idade' => '20'
  ));

  echo '<pre>';
  echo 'Traz toda a Array<br>';
  print_r($pessoas);
  echo 'Traz a Array[0]<br>';
  print_r($pessoas[0]);
  echo '</pre>';


  echo $__clodeFont;



?>
