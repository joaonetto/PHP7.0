<?php

  function soma(int ...$valores) {
    print_r($valores);
    return array_sum($valores);

  }

echo soma(2,2,6);
echo '<br>';
echo soma(25,33);
echo '<br>';
echo soma(1.5,1.5);

 ?>
