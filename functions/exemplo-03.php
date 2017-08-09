<?php

function ola($texto = 'Valor Padrao', $periodo='Bom dia!') {

  return "Olá $texto ! $periodo <br>";

}

echo ola("Mundo", "Boa Tarde");
echo ola();
echo ola('');
echo ola("João", "Boa Noite");





?>
