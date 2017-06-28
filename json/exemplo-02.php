<?php

  // JSON - Decode
  $json = '
    [{
      "nome": "XyZ",
      "idade": "30"
    },
    {
      "nome": "KyZ",
      "idade": "20"
    }]';

    $data = json_decode($json, true);
    echo '<pre>';
    print_r($data);
    echo '</pre>';

?>
