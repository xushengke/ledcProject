<?php

			function getAll($tbl) {
			include('connect.php');
			$queryAll = "SELECT * FROM {$tbl}";
			$runAll = mysqli_query($link, $queryAll);
			if($runAll){
			return $runAll;
			}else{
			$error = "There was error accessing this information.  Please contact your admin.";
			return $error;
			}
			mysqli_close($link);
			}


			function getImage($tbl1) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl1}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getTextinfo($tbl2) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl2}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getlightbox($tbl3) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl3}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getsinglebox($tbl3,$col3,$boxid){
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl3} WHERE {$col3} = {$boxid}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getmake($tbl4) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl4}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

			function getvideo($tbl5) {
				include('connect.php');
				$queryAll = "SELECT * FROM {$tbl5}";
				$runAll = mysqli_query($link, $queryAll);
				if($runAll){
					return $runAll;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}


			function getSingletbl($tbl, $col, $id) {
				include('connect.php');
				$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
				$runSingle = mysqli_query($link, $querySingle);
				if($runSingle){
					return $runSingle;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
	}


			function getSingleform($tbl, $col, $id) {
				include('connect.php');
				$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
				$runSingle = mysqli_query($link, $querySingle);
				if($runSingle){
					return $runSingle;
				}else{
					$error = "There was error accessing this information.  Please contact your admin.";
					return $error;
				}
				mysqli_close($link);
			}

?>
