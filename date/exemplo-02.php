<?php

  //$ts = strtotime('2001-09-11');
  //$ts = strtotime("now");
  //$ts = strtotime("+1 day");
  $ts = strtotime("+1 week");
  echo 'Timestamp de 2001-09-11: ' . $ts;
  echo '<br>';
  echo 'Convertendo o Timestamp em Data Completa: ' . date("l, d/m/Y", $ts);
 ?>
