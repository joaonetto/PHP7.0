<?php

  // Obtendo o ID da Sessão

  $a = session_id();
  if(empty($a)) session_start();
  echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
  echo '<br>';
  var_dump(session_id());


?>
