<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();

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
<title>CMS Portal</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body  id="adminbody">
	<div id="bodycontainer">
		<header id="mainHeader">
				<div id="main-menu1">
					<ul>
						<li><a href="../index.php" id="home">Home</a></li>
					</ul>
				</div>
		</header>
		<div class="logincontent">
			<h3 id="welcome">Welcome to your admin page</h3><br>
			<div id="admin">
			<?php echo "<h3 id=\"hello\">Hi-{$_SESSION['user_name']}</h3>";
						echo "<p>Last Logintime {$_SESSION['user_date']}</p><br><br>";
			 ?>
			<a href="admin_createuser.php">Create User</a>
			<a href="admin_edituser.php">Edit User</a>
			<a href="admin_deleteuser.php">Fired</a>
			<a href="admin_editallpa.php">Edit Content</a>
			<a href="https://analytics.google.com/analytics/web/?authuser=0#/embed/report-home/a117534571w174250910p173478735" target="_blank">Google Analytics</a>
			<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
			</div>
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
	<!-- Global site tag (gtag.js) - Google Analytics -->


</body>
</html>
