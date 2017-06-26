<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  // Utilizando o replace para substituição de caracteres em um string
  $nome = 'xyz';
  echo 'A variavel Nome SEM replace é: ' . $nome . '<br>';
  // Em Replace temos:
  // 1o atributo: Qual parte se deseja substituir
  // 2o atributo: Pelo que se deseja substituir
  // 3o atributo: Executar o replace em qual variavel
  $nome = str_replace('y', 'K', $nome);
  echo 'A variavel Nome COM replace é: ' . $nome . '<br>';

  echo $__clodeFont;

?>
