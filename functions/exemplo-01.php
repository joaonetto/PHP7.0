<?php

  function ola1() {
    echo 'Olá Mundo!<br>';
  }

  function ola2() {
    return 'Olá Mundo!<br>';
  }

  ola1();
  echo ola2();
  $frase = ola2();

  echo strlen($frase);

 ?>
