<?php
	include '../dbh.php';
	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
	<title>Quest Helper</title>
	
	<!-- link to database, start the session and set timezone -->
	<?php
		include '../dbh.php';
		date_default_timezone_set('Australia/Adelaide');
	?>
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
	<!-- Bootstrap javaScript and Jquery dependencies -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<!-- Font Awesome CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
	
	<!-- SASS compiled CSS -->
    <link href="css/main.css" rel="stylesheet">
	