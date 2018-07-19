<?php
	//DO NOT PUT LINK TO CALLER.PHP IN THE CONFIG FILE.
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("config.php");
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
<link rel="stylesheet" href="../../css/main.css">
</head>
<body id="adminbody">
	<div id="bodycontainer">
		<header id="mainHeader">
			<div class="row">
				<div id="main-menu1">
					<ul>
						<li><a href="../../index.php" id="home">Home</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class="logincontent">
			<h1 id="welcome">Welcome to your edit content page</h1>
			<?php
			if(isset($_GET['caller_id'])){
				$dir = $_GET['caller_id'];
				if($dir == 'lightbox1'){
					single_edit("tbl_lightbox","box_id",1);
				}else if($dir == 'lightbox2'){
					single_edit("tbl_lightbox","box_id",2);
				}else if($dir == 'lightbox3'){
					single_edit("tbl_lightbox","box_id",3);
				}else if($dir == 'lightbox4'){
					single_edit("tbl_lightbox","box_id",4);
				}else if($dir == 'lightbox5'){
					single_edit("tbl_lightbox","box_id",1);
				}else if($dir == 'make1'){
					single_edit3("tbl_make","make_id",1);
				}else if($dir == 'make2'){
					single_edit3("tbl_make","make_id",2);
				}else if($dir == 'make3'){
					single_edit3("tbl_make","make_id",3);
				}else if($dir == 'make4'){
					single_edit3("tbl_make","make_id",4);
				}else if($dir == 'text'){
					single_edit2("tbl_text","text_id",1);
				}
				else{
					echo "Caller id was passed incorrectly";
				}
			}
			?>
		</div>
		<footer id="adminfooter">
			<?php
				echo"<img src=\"../../images/$headerlogo\" alt=\"headerLogo\" id=\"footerlogo\">";
				echo"<ul><a target=_blank href=\"https://www.facebook.com/LondonEDC\"><li><img  id=\"facebook\" src=\"../../images/$facebook\"></li></a>";
				echo"<a target=_blank href=\"https://twitter.com/londonedc\"><li><img  class=\"social\" src=\"../../images/$twitter\"></li></a>";
				echo"<a target=_blank href=\"https://www.youtube.com/channel/UCVCXRw9lskdPuKzt2nmIj3Q\"><li><img  class=\"social\" src=\"../../images/$youtube\"></li></a>";
				echo"<a target=_blank href=\"https://www.instagram.com/london_inc/\"><li><img  class=\"social\" src=\"../../images/$instagram\"></li></a></ul>";

			 ?>
			 <p>Copyright London Tech Job &copy; 2018</p>
		</footer>
	</div>

</body>
</html>
