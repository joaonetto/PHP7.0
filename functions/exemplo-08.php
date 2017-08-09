<?php

  function soma(float ...$valores):string {
    //print_r($valores);
    return array_sum($valores);

  }

echo var_dump(soma(2,2,8));
echo '<br>';
echo var_dump(soma(25,33));
echo '<br>';
echo var_dump(soma(1.5,1.6));

 ?>
