<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';
  echo $azul;

  $qualASuaIdade = 17;
  $idadeCrianca = 12;
  $idadeMaior = 18;
  $idadeMelhor = 65;

  // Utilizando o IF / ElseIf / Else
  if ($qualASuaIdade <= $idadeCrianca){
    echo 'A idade é de uma criança: ' . $qualASuaIdade . '<br>';
  } elseif ($qualASuaIdade <= $idadeMaior){
    echo 'A idade é de um adolecente: ' . $qualASuaIdade . ' <br>';
  } elseif ($qualASuaIdade <= $idadeMelhor) {
    echo 'A idade é de um adulto: ' . $qualASuaIdade . ' <br>';
  } else {
    echo 'A idade é de um idoso: ' . $qualASuaIdade . ' <br>';
  }

  // Funcão chamada ternario
  echo ($qualASuaIdade < $idadeMaior)?'Menor de Idade':'Maior de Idade';

  echo $__clodeFont;

?>
