<?php
  function single_edit($tbl,$col,$id) {
    $result = getSingletbl($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);
    echo "<form action=\"editall.php\" enctype=\"multipart/form-data\" method=\"post\">";
    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\"><br><br>";
    for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result,$i);
      $fieldname = $dataType -> name;
      $fieldtype = $dataType -> type;
      if($fieldname != $col){
        echo "<label>{$fieldname}</label><br>";
        if($fieldtype = "252"){
          if($fieldname != "box_thumb" && $fieldname != "box_image" && $fieldname != "make_image" ){
            echo "<textarea name=\"{$fieldname}\">{$getResult[$i]}</textarea><br><br>";
          }else{
            // $fieldname = "event_pic";
            echo "<input type=\"file\" name=\"{$fieldname}\" value=\"\"><br><br>";
          }
        }
      }
    }
    echo "<input type=\"submit\" name=\"submit\" value=\"Save Content\" id=\"loginbutton\">";
    echo "</form>";
  }

  function single_edit2($tbl,$col,$id) {
    $result = getSingletbl($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);
    echo "<form action=\"editall2.php\" enctype=\"multipart/form-data\" method=\"post\">";
    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\"><br><br>";
    for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result,$i);
      $fieldname = $dataType -> name;
      $fieldtype = $dataType -> type;
      if($fieldname != $col){
        echo "<label>{$fieldname}</label><br>";
        if($fieldtype = "252"){
          if($fieldname != "event_pic"){
            echo "<textarea name=\"{$fieldname}\">{$getResult[$i]}</textarea><br><br>";
          }else{
            $fieldname = "event_pic";
            echo "<input type=\"file\" name=\"event_pic\" value=\"\"><br><br>";
          }
        }
      }
    }
    echo "<input type=\"submit\" name=\"submit\" value=\"Save Content\" id=\"loginbutton\">";
    echo "</form>";
  }


  function single_edit3($tbl,$col,$id) {
    $result = getSingletbl($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);
    echo "<form action=\"editall3.php\" enctype=\"multipart/form-data\" method=\"post\">";
    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\"><br><br>";
    for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result,$i);
      $fieldname = $dataType -> name;
      $fieldtype = $dataType -> type;
      if($fieldname != $col){
        echo "<label>{$fieldname}</label><br>";
        if($fieldtype = "252"){
          if($fieldname != "box_thumb" && $fieldname != "box_image" && $fieldname != "make_image" ){
            echo "<textarea name=\"{$fieldname}\">{$getResult[$i]}</textarea><br><br>";
          }else{
            // $fieldname = "event_pic";
            echo "<input type=\"file\" name=\"{$fieldname}\" value=\"\"><br><br>";
          }
        }
      }
    }
    echo "<input type=\"submit\" name=\"submit\" value=\"Save Content\" id=\"loginbutton\">";
    echo "</form>";
  }

 ?>
