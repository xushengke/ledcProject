<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
  include('connect.php');

  $tbl = $_POST['tbl'];
  $col = $_POST['col'];
  $id = $_POST['id'];
  // $cover1 = $_FILES['box_thumb'];
  // $cover2 = $_FILES['box_image'];
  $cover3 = $_FILES['make_image'];
  unset($_POST['tbl']);
  unset($_POST['col']);
  unset($_POST['id']);
  unset($_POST['submit']);
  //echo count($_POST);
  // echo count($_FILES);

  // if($_FILES['box_thumb']['type'] == "image/jpeg" || $_FILES['box_thumb']['type'] == "image/jpg" || $_FILES['box_thumb']['type'] == "image/png"){
  //     $target = "../../images/{$cover1['name']}";
  //     move_uploaded_file($_FILES['box_thumb']['tmp_name'], $target);
  //   }
  //
  //   if($_FILES['box_image']['type'] == "image/jpeg" || $_FILES['box_image']['type'] == "image/jpg" || $_FILES['box_image']['type'] == "image/png"){
  //       $target = "../../images/{$cover2['name']}";
  //       move_uploaded_file($_FILES['box_image']['tmp_name'], $target);
  //     }
      if($_FILES['make_image']['type'] == "image/jpeg" || $_FILES['make_image']['type'] == "image/jpg" || $_FILES['make_image']['type'] == "image/png"){
          $target = "../../images/{$cover3['name']}";
          move_uploaded_file($_FILES['make_image']['tmp_name'], $target);
        }


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
      foreach ($_FILES as $key => $value){
          $qstring .= $key."='".$value['name']."',";
      }
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
