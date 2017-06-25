<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;
  echo '&& - AND <br>|| - OR <br><br>';


  $resultado = 10 + 3 / 2;
  echo 'Qual o resultado da expressão: 10+3/2: ' . $resultado . '<br>';

  $resultado = (10 + 3) / 2;
  echo 'Qual o resultado da expressão: (10+3)/2: ' . $resultado . '<br>';
  echo '<br>';
  // A questão aqui é:
  // (10+3)/2 = 6.5 é > 5 = True
  // 10+5 = 15 < 3 = False. Porque 3 não é maior que 15
  // O && é um comparador de funções Lógicas, sendo:
  // 1o Operacao = True
  // 2o Operacao = False
  // Resultado False
  $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
  echo 'Qual o resultado da expressão: (10 + 3) / 2 > 5 && 10 + 5 < 3: ';
  var_dump($resultado);
  echo '<br>';

  // A questão aqui é:
  // (10+3)/2 = 6.5 é > 5 = True
  // 10+5 = 15 < 20 = True. Porque 20 é Maior que 15
  // O && é um comparador de funções Lógicas, sendo:
  // 1o Operacao = True
  // 2o Operacao = True
  // Resultado True
  $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
  echo 'Qual o resultado da expressão: (10 + 3) / 2 > 5 && 10 + 5 < 20: ';
  var_dump($resultado);
  echo '<br>';

  // A questão aqui é:
  // (10+3)/2 = 6.5 > 10 = False = 6.5 não é maior que 10
  // 10+5 = 15 < 3 = False = 15 não é menor que 3
  // O && é um comparador de funções Lógicas, sendo:
  // 1o Operacao = False
  // 2o Operacao = False
  // Resultado False
  $resultado = (10 + 3) / 2 > 10 && 10 + 5 < 3;
  echo 'Qual o resultado da expressão: (10 + 3) / 2 > 10 && 10 + 5 < 3: ';
  var_dump($resultado);
  echo '<br>';

  // A questão aqui é:
  // (10+3)/2 = 6.5 > 10 = False = 6.5 não é maior que 10
  // 10+5 = 15 < 3 = False = 15 não é menor que 3
  // O && é um comparador de funções Lógicas, sendo:
  // 1o Operacao = False
  // 2o Operacao = True
  // Resultado True
  // Com uma das condições verdadeiras, toda a expressão é verdadeira
  $resultado = (10 + 3) / 2 > 10 || 10 + 5 < 20;
  echo 'Qual o resultado da expressão: (10 + 3) / 2 > 10 || 10 + 5 < 20: ';
  var_dump($resultado);
  echo '<br>';


  echo $__clodeFont;

?>
