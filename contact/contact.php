<?php
    require_once("config2.php");
    if(isset($_POST['submit'])){
      //echo "Good for you, you can click a button :)";
      $name = $_POST['name'];
      $email = $_POST['email'];
      $street = $_POST['street'];
      $message = $_POST['message'];
      $direct = "thankyou.php";
      //echo $message;

        $sendMail = submitMessage($name, $email, $message, $direct);

    }

 ?>
