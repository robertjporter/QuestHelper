<?php include 'header.php';

if(isset($_SESSION['id'])) {
		include 'navigation.php';
		echo "<br><br><br>";
		include 'home.php';
	} else {
		include 'login.php';
	}
include 'footer.php';