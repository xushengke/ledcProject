<?php
	// ini_set('display_errors',1);
	// error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

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
<body id="adminbody">
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
			<h1 id="welcome">Welcome to your create user page</h1>
			<?php if(!empty($message)){echo $message;} ?>
			<form action="admin_createuser.php" method="post" class="formm">
			<label>First Name:</label>
			<input type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?>
		"><br><br>

			<label>Username:</label>
			<input type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>
		"><br><br>

			<label>Password:</label>
			<input type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>
		"><br><br>

			<label>Email:</label>
			<input type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?>
		"><br><br>

			<label>User Level:</label>
			<select name="userlvl">
				<option value="">Please select a user level</option>
				<option value="2">Web Admin</option>
				<option value="1">Web Master</option>
			</select><br><br>

			<input type="submit" name="submit" value="Create User" id="loginbutton">
			</form>
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
