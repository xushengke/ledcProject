<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$tbl1 = "tbl_image";
	$getImages = getImage($tbl1);

	if(!is_string($getImages)){
	while($row = mysqli_fetch_array($getImages)){
		$headerlogo = $row['image_logo'];
		$facebook = $row['image_facebook'];
		$twitter = $row['image_twitter'];
		$youtube = $row['image_youtube'];
		$instagram = $row['image_instagram'];
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>multiple return</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body  id="adminbody">
	<div id="bodycontainer">
		<header id="mainHeader">
			<div class="row">
				<div id="main-menu1">
					<ul>
						<li><a href="../index.php" id="home">Home</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="logincontent">
			<h1 id="welcome">Welcome to your edit content page</h1><br><br><br>
			<a href="phpscripts/caller2.php?caller_id=lightbox1">lightbox1</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=lightbox2">lightbox2</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=lightbox3">lightbox3</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=lightbox4">lightbox4</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=lightbox5">lightbox5</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=make1">make1</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=make2">make2</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=make3">make3</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=make4">make4</a><br><br>
			<a href="phpscripts/caller2.php?caller_id=text">text</a><br><br>
			<!-- <a href="admin_editall2.php">Event2</a><br> -->
		</div>
		<footer id="adminfooter">
			<?php
				echo"<img src=\"../images/$headerlogo\" alt=\"headerLogo\" id=\"footerlogo\">";
				echo"<ul><a target=_blank href=\"https://www.facebook.com/LondonEDC\"><li><img  id=\"facebook\" src=\"../images/$facebook\"></li></a>";
				echo"<a target=_blank href=\"https://twitter.com/londonedc\"><li><img  class=\"social\" src=\"../images/$twitter\"></li></a>";
				echo"<a target=_blank href=\"https://www.youtube.com/channel/UCVCXRw9lskdPuKzt2nmIj3Q\"><li><img  class=\"social\" src=\"../images/$youtube\"></li></a>";
				echo"<a target=_blank href=\"https://www.instagram.com/london_inc/\"><li><img  class=\"social\" src=\"../images/$instagram\"></li></a></ul>";

			 ?>
			 <p>Copyright London Tech Job &copy; 2018</p>
		</footer>
	</div>

</body>
</html>
