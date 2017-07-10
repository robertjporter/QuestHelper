<?php
	$conn = mysqli_connect("localhost", "robertjp_Quest", "h3L1um%42", "robertjp_QuestManagerLogin");
	if (!$conn){
		die("QuestManagerLogin Connection failed: ".msqli_connect_error());
	}
	