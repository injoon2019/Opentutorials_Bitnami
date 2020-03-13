<?php
  $serverName = "127.0.0.1:3307";
  $conn = mysqli_connect($serverName, "root", "dlswns949");
  mysqli_select_db($conn, "opentutorials");

  $sql = "INSERT INTO topic(title, description, created) VALUES('".$_POST['title']."','". $_POST['description']."','". $_POST['author']."', now())";
  $result = mysqli_query($conn, $sql);
  header('Location: http://localhost:81/index.php');
 ?>
