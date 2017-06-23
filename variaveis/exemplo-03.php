<?php

  //Tipos Básicos
  $nome = 'XyZ';
  $site = 'www.teste.com.br';
  $ano = 2017;
  $salario = 5500.99;
  $bloqueado = false;

  // Tipo Array
  $frutas = array(
    'abacaxi',
    'laranja',
    'manga'
  );
  // apresenta Manga
  echo $frutas[2];

  //Tipo Objeto
  $nascimento = new DateTime();

  //Tratar arquivos
  $arquivo = fopen('exemplo-03.php','r');

  //Variavel NULL
  //Variavel não iniciada, inexistente
  //Retorno = NULL
  $nulo = null;

  //Variavel Vazio
  //Variavel inciada porem sem conteúdo
  //Retorno = string(0) ""
  $ar = '';

  var_dump($nulo);
  var_dump($ar);

?>
