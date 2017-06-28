<?php

  // JSON - Encode
  $pessoas = array();

  array_push($pessoas, array (

    'nome' => 'XyZ',
    'idade' => '30'
  ));

  array_push($pessoas, array (

    'nome' => 'KyZ',
    'idade' => '20'
  ));

  echo json_encode($pessoas);

?>
