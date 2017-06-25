<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  // String em UpperCase
  $nome = 'xyz qwe';
  echo 'Colocando o nome ' . $nome . ' em UpperCase. Resultado: ' . strtoupper($nome) .  '<br>';

  // String em LowerCase
  $nome = 'XYZ QWE';
  echo 'Colocando o nome ' . $nome . ' em LowerCase. Resultado: ' . strtolower($nome) .  '<br>';

  // String UpperCase Somente nas primeiras Letreas
  $nome = 'xyz qwe';
  echo 'Colocando o nome ' . $nome . ' em UpperCase apenas as iniciais. Resultado: ' . ucwords($nome) .  '<br>';

  // String UpperCase Somente na primeira palavra
  $nome = 'xyz qwe';
  echo 'Colocando o nome ' . $nome . ' em UpperCase apenas na primeira palavra. Resultado: ' . ucfirst($nome) .  '<br>';



  echo $__clodeFont;

?>
