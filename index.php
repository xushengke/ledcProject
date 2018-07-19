<?php
      ini_set('display_errors',1);
      error_reporting(E_ALL);

      require_once('admin/phpscripts/config.php');

      $tbl1 = "tbl_image";
      $getImages = getImage($tbl1);

      if(!is_string($getImages)){
      while($row = mysqli_fetch_array($getImages)){
        $headerlogo = $row['image_logo'];
        $promobcg = $row['image_promo'];
        $contact1 = $row['image_contact1'];
        $contact2 = $row['image_contact2'];
        $facebook = $row['image_facebook'];
        $twitter = $row['image_twitter'];
        $youtube = $row['image_youtube'];
        $instagram = $row['image_instagram'];
      }
    }

    $tbl2 = "tbl_text";
    $getText = getTextinfo($tbl2);

    if(!is_string($getText)){
    while($row = mysqli_fetch_array($getText)){
      $introduction = $row['text_intro'];
      $made1 = $row['text_made1'];
      $made2 = $row['text_made2'];
      $contacttext = $row['text_contact'];
    }
  }
    $tbl3 = "tbl_lightbox";
    $col3 = "box_id";
    $getbox = getlightbox($tbl3);

    $tbl4 = "tbl_make";
    $getmake = getmake($tbl4);

    $tbl5 = "tbl_video";
    $getvideo = getvideo($tbl5);
    if(!is_string($getvideo)){
    while($row = mysqli_fetch_array($getvideo)){
      $video = $row['video_source'];
    }
  }



 ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEDC</title>
    <link rel="stylesheet" href="css/foundation.css">
    <!-- <link rel="stylesheet" href="css/app.css"> -->
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
    <div id="siteContainer">
    <header id="mainHeader">
      <div class="row">
        <div data-responsive-toggle="main-menu" data-hide-for="large" id="hamMenu">
          <button class="menu-icon float-right" type="button" data-toggle></button>
        </div>
        <div id="main-menu">
          <ul>
            <li><a href="#" id="1" class="nav">ABOUT US</a></li>
            <li><a href="#" id="2" class="nav">SERVICES</a></li>
            <li><a href="#" id="3" class="nav">DATA</a></li>
            <li><a href="#" id="4" class="nav">OPPORTUNITY</a></li>
            <li><a href="#" id="5" class="nav">CONTACT US</a></li>
            <li><a href="admin/admin_login.php" id="signin">Sign in</a></li>
            <li><a href="admin/admin_index.php" id="index">Account</a></li>
          </ul>
        </div>
      </div>
    </header>
    <section class="row">
      <h2 class="hidden">promo</h2>
      <?php
       echo "<div id=\"promocon\"><img id=\"logo\" src=\"images/$headerlogo\" alt=\"promobcg\">
                <p id=\"welcome\">Welcome To London!</p>
             </div>";
      ?>
  </section>

  <section id="introduction" class="section1">
    <h2 class="hidden">intro</h2>
    <div class="video">
      <?php
      echo"<video id=\"video\" controls>
                        <source src=\"video/{$video}\" type=\"video/mp4\"/>
      </video>";
      ?>

    </div>
    <div id="introcon">
      <p id="introtitle1">LONDON</p>
      <p id="introtitle2">ONTARIO CA</p>
      <?php
      echo "<p id=\"intro\">$introduction</p>";
       ?>
    </div>
  </section>

  <section id="lightboxsec" class="section2">
    <h2 class="hidden">function</h2>
    <div class="thumbimages">
      <?php
      if(!is_string($getbox)){
            while($row = mysqli_fetch_array($getbox)){
              $boxid = $row['box_id'];
              echo "
              <div class=\"boxcon\"><div class=\"boxnamecon\"><p>{$row['box_name']}</p></div><img src=\"images/{$row['box_thumb']}\" alt=\"box\" id=\"{$row['box_name']}\" class=\"lightboximage\"></div>
              ";
            }
          }
       ?>
    </div>
    <div class="lightbox">
      <i class="fa fa-times close-lightbox"></i>
      <img src="" alt="box" id="galightboximg">
      <p id="galightboxtext"></p>
    </div>
  </section>

  <section class="section3">
    <div id="chart_con"><canvas id="bar-chart" width="800" height="450"></canvas></div>
  </section>


  <section id="make" class="section4">
    <h2 class="hidden">Made in London</h2>
    <div id="makecon">
      <h2 id="maketitle">Made in London</h2>
      <?php
      echo "<p class=\"makeintro\">$made1</p><br>
            <p class=\"makeintro\">$made2</p>
      ";

      if(!is_string($getmake)){
            while($row = mysqli_fetch_array($getmake)){
              echo "
              <div class=\"makeimagecon\"><br><img src=\"images/{$row['make_image']}\" alt=\"box\" class=\"makeimage\">
              <p>{$row['make_text']}</p></div>
              ";
            }
          }
       ?>
    </div>
  </section>

  <section id="contact1" class="section5">
    <h2 class="hidden">contact</h2>
    <br><br><h2>Call London Home</h2><br>
    <?php
    echo "<p>$contacttext</p>";
     ?>
  </section>

  <section id="contact2">
    <h2>Contact Us</h2>
    <div id="contactForm">
       <form action="contact/contact.php" method="post">
   <!--Make sure to give each input a name attribute(name="")-->
        <label>Name: </label><input class="contactinput" name="name" type="text" size="21" maxlength="30" />
        <label>Email: </label><input class="contactinput" name="email" type="text" size="21" maxlength="30" />
        <label for="street">Street: </label><input class="street contactinput" name="street" type="text" size="21" maxlength="30" />
        <label for="message">Message: </label><textarea id="message" name="message"></textarea>
        <input id="submit" name="submit" type="submit" value="Send" />
       </form>
     </div>
  </section>


  <footer>
    <?php
      echo"<img src=\"images/$headerlogo\" alt=\"headerLogo\" id=\"footerlogo\">";
      echo"<ul><a target=_blank href=\"https://www.facebook.com/LondonEDC\"><li><img  id=\"facebook\" src=\"images/$facebook\"></li></a>";
      echo"<a target=_blank href=\"https://twitter.com/londonedc\"><li><img  class=\"social\" src=\"images/$twitter\"></li></a>";
      echo"<a target=_blank href=\"https://www.youtube.com/channel/UCVCXRw9lskdPuKzt2nmIj3Q\"><li><img  class=\"social\" src=\"images/$youtube\"></li></a>";
      echo"<a target=_blank href=\"https://www.instagram.com/london_inc/\"><li><img  class=\"social\" src=\"images/$instagram\"></li></a></ul>";

     ?>
     <p>Copyright London Tech Job &copy; 2018</p>
  </footer>

  </div>
      <script src="js/vendor/jquery.js"></script>
      <script src="js/main.js"></script>
      <script src="js/vendor/what-input.js"></script>
      <script src="js/vendor/foundation.js"></script>
      <script src="js/app.js"></script>
      <script src="js/ScrollToPlugin.min.js"></script>
      <script src="js/TweenMax.min.js"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/Chart.bundle.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/Chart.js"></script>
      <script src="js/Chart.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117534571-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117534571-1');
</script>

  </body>

  </html>
