<?php 
	$Life = array("INSERT INTO quests (title, guid, reward, difficulty, hrsReq, duedate, description) VALUES ('$title', '$guid', '$reward', '$difficulty', '$hrsReq', '$duedate', '$description'", "INSERT INTO quests (title, guid, reward, difficulty, hrsReq, duedate, description) VALUES ('$title', '$guid', '$reward', '$difficulty', '$hrsReq', '$duedate', '$description'", "INSERT INTO quests (title, guid, reward, difficulty, hrsReq, duedate, description) VALUES ('$title', '$guid', '$reward', '$difficulty', '$hrsReq', '$duedate', '$description'");
	echo "<br>";
	print_r($Life);
	echo "<br>";
	echo '<pre>'; print_r($Life); echo '</pre>';
	echo "<br>";
	var_dump($Life);