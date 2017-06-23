<?php

  /*
  Para documentar o PHP pode ser utilizado o
  https://www.phpdoc.org/
  */

  // Abaixo o Nascimento
  $anoNascimento = 1973;
  // Abaixo o Nome
  $nome = 'XyZ';

  //Abaixo o Sobrenome
  $sobrenome = 'QwE';

  //Concatenar o $nome e o $sobrenome
  $nomeCompleto = $nome . ' ' . $sobrenome;

  //Apresentando o valor da variavel $nomeCompleto
  echo 'Concatenando $nome e $sobrenome em $nomeCompleto: ' . $nomeCompleto . '<br>';

  //Executando um Clear de Variavel
  echo 'Limpando a variavel $nomeCompleto';
  unset($nomeCompleto);

  //Apresenta a Variavel caso exista
  // O Isset verifica se a variável foi iniciada, ou se ela existe.
  if (isset($nomeCompleto)) {
    echo 'O valor da Variável $nomeCompleto é: ' .$nomeCompleto. '<br>';
  }

?>
