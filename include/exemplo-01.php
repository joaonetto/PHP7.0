<?php
  //Include: Inclui o arquivo sem verificar a qualidade dos comandos
  // include 'exemplo-01a.php';

  //Require: Incluirá o arquivo somente se as condições de comandos e do arquivo estejam ok
  // Obriga também que o arquivo exista.
  // Usualmente utilize o Require
  // require 'exemplo-01a.php';

  // Utilizando o _ONCE:
  // Neste caso, o include e o require _once, traz apenas uma vez o arquivo, para que não haja replicação de chamadas.
  // Com o require_once, será verificado se o arquivo existe e se esta funcionando corretamente
  // e por fim traga a página apenas uma única vez. Caso haja uma chamada por engano 2 vezes, com o _once a segunda é descartada.
  require_once 'exemplo-01a.php';

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';

  echo $azul;

  $valor1 = 10;
  $valor2 = 20;

  echo "O Valor da expressão $valor1 + $valor2 é: " . somar($valor1, $valor2) . '<br>';

  echo $__clodeFont;


?>
