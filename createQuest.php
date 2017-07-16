<?php include 'header.php';
include 'navigation.php';
?>
<br><br><br>
<div class='RJP_logIn container vertical-center'>
	<form enctype="multipart/form-data" id="createQuest" class='form-signin' action='inc/quest.inc.php' method='POST'>
		<h1 class="RJP_header">CREATE NEW QUEST</h1>
		<br>
		<p>Title</p>
		<input id="title" type="text" class="form-control" name="title" placeholder="Quest Title"/>
		<br>
		
		<!-- FOR TESTING ONLY -->
		<input id='guid' type='hidden' name='guid' value='<?php if(isset($_SESSION['id'])) {echo $_SESSION['id'];} else {echo "user id not found";}?>'>
		<p>Quest Giver</p>
		<p><?php
			if(isset($_SESSION['id'])) {
				echo $_SESSION['id'];
			} else {
				echo "user id not found";
			}?></p>
		<br>
		<!-- END TEST -->
		
		<p>Reward</p>
		<input id="reward" type="text" class="form-control" name="reward" placeholder="1"/>
		<br>
		
		<p>Difficulty</p>
		<input type="range" name="difficulty" min="1" max="5">
		<br>
		
		<p>Granted Item</p>
		<input type="file" name="item1">
		<br>
		
		<p>Suggested Hours</p>
		<input id="hrsReq" type="text" class="form-control" name="hrsReq" placeholder="1"/>
		<br>
		
		<p>Date Required</p>
		<input id="duedate" type="date" class="form-control" name="duedate" placeholder="Date Required"/>
		<br>
		
		<p>Quest description</p>
		<textarea rows="10" id='description' name='description' class='comment_box'></textarea>
		<br><br>
		
		<script>
			$objNo = 1;
			function add_objective(){
				$("#objectives li:last").after("<li class='objective_container' id='objective"+$objNo+"'><p>Objective Name</p><input id='location' type='text' class='form-control' name='objTitle[]'/><br><p>Objective Description</p><textarea rows='5' name='objDescription[]' class='comment_box'></textarea> <input type='button' value='REMOVE' onclick=delete_obj('objective"+$objNo+"')></li>");
				$objNo = $objNo+1;
			}
			
			function delete_obj(objNo){
				 $('#'+objNo).remove();
			}
		</script>
		
		<ul id="objectives">
			<li class="objective_container">
				<p>Objective Name 1</p>
				<input id="location" type="text" class="form-control" name="objTitle[]" placeholder="Objective "/>
				<br>
				
				<p>Objective Description</p>
				<textarea rows="5" name='objDescription[]' class='comment_box'></textarea>
			</li>
		</ul>
		
		<br>
		
		<input type="button" onclick="add_objective();" value="ADD OBJECTIVE">
		
		<br><br><br>
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">CREATE QUEST</button>
	</form>
</div>

<?php
include 'footer.php';