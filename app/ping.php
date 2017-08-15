<?php
  // Checksum calculation function
  include_once("dbaccess.php");

  $sql = new Sql();

  /*
  $result1 = $sql->select('
    SELECT
      *
    FROM
      sga_uxp.tb_ping');
  $GLOBALS['$qlb_Ping'] = $result1;
  var_dump($GLOBALS['$qlb_Ping']);
  exit;
  */

  $sql = new Sql();

  function microtime_float() {
    list($usec, $sec) = explode(" ", microtime());
    //var_dump($usec);
    //var_dump($sec);
    //echo PHP_EOL;
    return ((float)$usec + (float)$sec);
    //return (float)$usec;
  }

  function icmpChecksum($data) {
    if (strlen($data)%2)
    $data .= "\x00";

    $bit = unpack('n*', $data);
    $sum = array_sum($bit);

    while ($sum >> 16)
    $sum = ($sum >> 16) + ($sum & 0xffff);

    return pack('n*', ~$sum);
  }
  // Making the package
  $type= "\x08";
  $code= "\x00";
  $checksum= "\x00\x00";
  $identifier = "\x00\x00";
  $seqNumber = "\x00\x00";
  $data= "ACTAR-SGA-UserEXperience";
  $package = $type.$code.$checksum.$identifier.$seqNumber.$data;
  $checksum = icmpChecksum($package); // Calculate the checksum
  $package = $type.$code.$checksum.$identifier.$seqNumber.$data;
  // And off to the sockets
  $socket = socket_create(AF_INET, SOCK_RAW, 1);
  socket_connect($socket, "www.actar.com.br", null);
  // If you're using below PHP 5, see the manual for the microtime_float
  // function. Instead of just using the microtime() function.
  //$startTime = strtotime("now");
  //$startTime = microtime(true);
  //$startTime = microtime_float();
  //var_dump($startTime);
  //$theTime = array_sum( explode( ' ' , microtime() ) );
  //echo $theTime . PHP_EOL;
  //exit;
  echo PHP_EOL;
  for ($i=0; $i < 2 ; $i++) {
    $startTime = microtime_float();
    socket_send($socket, $package, strLen($package), 0);
    //$endTime = microtime(true);
    $endTime = microtime_float();
    //var_dump($endTime);
    $time = (($endTime - $startTime) * 1000000);
    if (socket_read($socket, 255)) {
      //echo round(microtime(true) - $startTime, 4) .' seconds';
      //echo round(((microtime(true) - $startTime) * 1000) * 1000,6) .' ms';
      echo '        O Nome do Host é : ' . gethostname() . PHP_EOL;
      echo '         Valor de Inicio : ' . $startTime . PHP_EOL;
      echo '            Valor de FIM : ' . $endTime . PHP_EOL;
      echo 'Processado e Carregado em: ' . $time . PHP_EOL;
      echo PHP_EOL;
    }
    $i=0;
    $sql->query('
      INSERT INTO sga_uxp.tb_ping
        (sga_uxp.tb_ping.nomeMachine, sga_uxp.tb_ping.tmCollectStart, sga_uxp.tb_ping.tmCollectEnd, sga_uxp.tb_ping.variant)
        VALUES
        ("' . gethostname() . '",' . $startTime . ',' . $endTime . ',' . $time . ');');
    //$time=0;
    //$endTime;
    //$startTime;
    echo $valorQuery;
    sleep(3);

    // $sql->query(' INSERT INTO `sga_uxp`.`tb_ping` (`nomeMachine`, `tmCollectStart`, `tmCollectEnd`, `variant`) VALUES ('0017db55c19d', '1', '1', '1');
  }
  socket_close($socket);
?>
