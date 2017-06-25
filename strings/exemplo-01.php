<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  $nome1 = 'XyZ';
  $nome2 = 'QwE';

  // Para presentar as variáveis dentro de uma única condição sem haver concatenação,
  // Utilize "" (aspas)
  // Quando utilizado '' (apice) é necessário executar a concatenação

  echo 'Utilizando o "" (aspas)<br>';
  echo "O Nome1 é $nome1<br>";
  echo "Utilizando o '' (apice)<br>";
  echo 'O Nome1 é ' . $nome1 . '<br>';
  echo '<br>';
  echo 'Para incluir ASPAS em uma linha, utilize o APICE. O mesmo vale o contrário.<br>';

  echo $__clodeFont;

?>
