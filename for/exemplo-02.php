<?php

  $azul = '<font face="verdana" size="3" color="blue">';
  $__clodeFont = '</font>';
  echo $azul;

  echo '<select>';
  // FOR com HTML
  for ($i=date('Y'); $i >= date('Y') - 100; $i--) {
    echo '<option value="' . $i . '">' . $i . '</options>';
  }
  echo '</select>';
  echo $__clodeFont;

?>
