<?php
header('Content-Type: application/json');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_twitter');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli) {
  die("Connection fail:" . $mysqli->error);
}


$myQuery = "SELECT * FROM tbl_twitterdata order by twitter_season";
$result = $mysqli->query($myQuery);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$mysqli->close();

print json_encode($data);
 ?>
