<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
  include('connect.php');

  $tbl = $_POST['tbl'];
  $col = $_POST['col'];
  $id = $_POST['id'];
  unset($_POST['tbl']);
  unset($_POST['col']);
  unset($_POST['id']);
  unset($_POST['submit']);
  //echo count($_POST);
  // echo count($_FILES);


  $num = count($_POST);
  $count = 0;
  $qstring = "UPDATE {$tbl} set ";

  foreach ($_FILES as $key => $value){
      $qstring .= $key."='".$value['name']."',";
  }

  foreach ($_POST as $key => $value) {
    $count++;
    if($count !=$num){
      $qstring .= $key."='".$value."',";

    }else {
      $qstring .= $key."='".$value."' ";
    }
  }


  $qstring .= "WHERE {$col}={$id}";

  $updatequery = mysqli_query($link, $qstring);
  if($updatequery){
    header("Location:../../index.php");
  }else {
    echo "There was a problem with the server, please contact the web admin...Adam";
  }
   // echo $qstring;


  mysqli_close($link);
 ?>
