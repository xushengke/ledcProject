<?php
	session_start();

	//  function createUseradmin() {
	// 	 $_SESSION['admin'] = false;
	//  }
	//
	//  function logInpage() {
	// 	 if($_SESSION['admin'] == NULL || $_SESSION['admin']== true){
	//  		redirect_to("admin_index.php");
	//  	}else {
	// 		$_SESSION['admin'] = true;
	//  		redirect_to("admin_edituser.php");
	//  	}
	// }
	//tried to use session to write the function, however it didn't work.
	//the session I set before cannot survive after log out.
	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("../index.php");
		}
	}

	function logged_out() {
		//$admin = $_SESSION['admin'];
		session_destroy();
		//$_SESSION['admin'] = $admin;

		redirect_to("../../index.php");
	}

?>
