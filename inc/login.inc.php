<?php
	session_start();
	
	include '../dbh.php';
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//Password decryption
	$sql = "SELECT * FROM user WHERE uid='$uid'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$hash_pwd = $row['pwd'];
	$hash = password_verify($pwd, $hash_pwd);
	
	//Password check FAIL
	if ($hash == 0) {
		header("Location: ../index.php?error=empty");
		exit();
	} else {
		//Password check PASS
		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
		$result = mysqli_query($conn, $sql);
		
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "Your username or password is incorrect!";
		} else {
			$_SESSION['id'] = $row['id'];
		}
		
		//Return to index
		header("Location: ../index.php");
	}