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
	
	//If all error checks are passed submit to DB (yeah lets sort this first, then do error henadling)
	$sql = "INSERT INTO quests (title, guid, reward, difficulty, hrsReq, duedate, description) VALUES ('$title', '$guid', '$reward', '$difficulty', '$hrsReq', '$duedate', '$description')";
	
	$result = mysqli_query($conn, $sql);
	
	$last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	
	//Submit objective arrays
	for($i=0;$i<count($objTitle);$i++){
		if($objTitle[$i]!="" && $objDescription[$i]!=""){
			
			$objsql = "INSERT INTO objectives (qid, objTitle, objDescription) VALUES ('$last_id','$objTitle[$i]','$objDescription[$i]')";
			$objresult = mysqli_query($conn, $objsql);
		}
	}
	
	//returne to Home page
	//header("Location: ../index.php?quest_added");
?>