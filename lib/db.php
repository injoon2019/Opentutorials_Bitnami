<?php
function db_init($host, $duser, $dpw, $dname){
  $serverName = "127.0.0.1:3307";
  $conn = mysqli_connect($host, $duser, $dpw);
  mysqli_select_db($conn, "opentutorials");
  return $conn;
}
 ?>
