<?php

  //Funções Anonimas
  function teste($callback) {
    //Processo Lento
    $callback();
  }

  teste(function() {
    echo 'Terminou !';
  });

 ?>
