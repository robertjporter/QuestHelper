<?php
	session_start();
	
	include '../dbh.php';
	
	//User signup information
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//error checking - User signup information
	if(empty($first)){
		header("Location: ../signup.php?error=empty");
		exit();
	} 
	
	elseif(empty($last)){
		header("Location: ../signup.php?error=empty");
		exit();
	}
	
	elseif(empty($uid)){
		header("Location: ../signup.php?error=empty");
		exit();
	}
	
	elseif(empty($pwd)){
		header("Location: ../signup.php?error=empty");
		exit();
	}
	
	else {
		//error check username availability
		$sql="SELECT uid FROM user WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
		
		if($uidcheck > 0){
			header("Location: ../signup.php?error=username");
			exit();
		} else {
			//Password incryption
			$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
			
			//If all error checks are passed submit to DB
			$sql = "INSERT INTO user (first, last, uid, pwd) 
			VALUES ('$first', '$last', '$uid', '$encrypted_password')";
			$result = mysqli_query($conn, $sql);
			
			//returne to Home page
			header("Location: ../index.php?signed_up");
		}
	}
	
	