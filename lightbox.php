<?php
$user = 'root';
$pass = 'root';  //mac: $pass = 'root';
$host = 'localhost';
$db = 'db_ledc';
//try connecting to the Server
$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conn, 'utf8');
if (!$conn) {
  echo 'something done busted!';
  exit;
}

if (isset($_GET["service"])) {
  $servicename = $_GET["service"];// F55
//select one car instead of all the them
  $myQuery = "SELECT * FROM tbl_lightbox WHERE box_name = '$servicename'";
//store the result
  $result = mysqli_query($conn, $myQuery);
//get the row
  $row = mysqli_fetch_assoc($result);
//show it on the webpage
  echo json_encode($row);
}
 ?>
