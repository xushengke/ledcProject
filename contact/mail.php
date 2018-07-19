<?php

    function redirect_to($location) {
      if($location != NULL){
          header("Location: {$location}");
          exit;
      }
    }




    //echo "From mail.php";
    function submitMessage($name, $email, $message, $direct) {
      $to = "xushengke94@gmail.com";
      $subj = "Email from portfolio site";
      $extra = "reply-to: {$email}";
      $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
      //this will not work locally, this need to be tested on your hosting


      //mail($to, $subj, $msg, $extra);   //!!!!!!!(uncomment it when you test the hosting)

      $direct = $direct."?name={$name}";
      redirect_to($direct);
    }


?>
