<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['cid'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$cid = validate($_POST['cid']);

	if (empty($cid)) {
		header("Location: index.php?error=Required Cetificate ID ");
	    exit();
	}else{

		$sql = "SELECT * FROM users WHERE cid='$cid'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['cid'] === $cid) {
            	header("Location: index.php?error=It is a Valid Certificate ✔");
		        exit();
            }else{
				header("Location: index.php?error=Incorect Certificate ID");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect Certificate ID");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}