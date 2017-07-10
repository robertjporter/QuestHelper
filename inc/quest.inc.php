<?php	
	include '../dbh.php';
	
	//Quest information
	$title = $_POST['title'];
	$guid = $_POST['guid'];
	$reward = $_POST['reward'];
	$difficulty = $_POST['difficulty'];
	$hrsReq = $_POST['hrsReq'];
	$duedate = $_POST['duedate'];
	$description = $_POST['description'];
	
	$objTitle=$_POST['objTitle'];
	$objDescription=$_POST['objDescription'];
	
	for( $i=0; $i<count($objTitle); $i++){
		if($objTitle[$i]!="" && $objDescription[$i]!=""){
		mysql_query("INSERT INTO objectives (objTitle, objDescription) VALUES ('$objTitle[$i]','$objDescription[$i]')");	 
		}
	}
	echo "<h1>obj title= ";
	echo '<pre>'; print_r($objTitle); echo '</pre>';
	echo "<br>obj title END <br>";
	
	echo "objDescription= ";
	echo '<pre>'; print_r($objDescription); echo '</pre>';
	echo "<br>objDescription END <br><h1>";
	
	
	//If all error checks are passed submit to DB (yeah lets sort this first, then do error henadling)
	$sql = "INSERT INTO quests (title, guid, reward, difficulty, hrsReq, duedate, description) VALUES ('$title', '$guid', '$reward', '$difficulty', '$hrsReq', '$duedate', '$description')";
	
	$result = mysqli_query($conn, $sql);
	
	//returne to Home page
	//header("Location: ../index.php?quest_added");
?>	