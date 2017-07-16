<?php include 'header.php';
include 'navigation.php';
?>
<br><br><br>
	<!-- quest browser -->
	<div id="quest-browser" class="container RJP-highten">
		<!-- quest browser navigation -->
			<br>
			<ul class="nav nav-tabs">
				<li class="active RJP-fill-width"><a data-toggle="tab" href="#home">Available</a></li>
				<li class="RJP-fill-width"><a data-toggle="tab" href="#menu1">Active</a></li>
				<li class="RJP-fill-width"><a data-toggle="tab" href="#menu2">Completed</a></li>
			</ul>
		<!-- END quest browser navigation -->
		<div id="quest-browser-content" class="tab-content RJP-content">
	
			<!-- Available list -->
			<div id="home" class="tab-pane fade in active RJP-content">
				<!-- list search -->
				<li class="list-group-item">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search available quests">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Search</button>
						</span>
					</div>
				 </li>
				 <!-- END list search -->
				  
				 <!-- list key -->
				 <li class="list-group-item"> <span>Name</span> <span class="pull-right"> Payout / Hours </span></li>
				 <!-- END list key -->
				  
				<!--while loop to run through all Quests-->
				<?php
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * FROM quests WHERE active='0';";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					?>
						<li onclick="location.href='questInfo.php?<?php echo $row[qid]; ?>';" class="list-group-item">
						<span class="badge"><?php echo $row[hrsReq]; ?>hrs</span> 
						<span class="badge">$<?php echo $row[reward]; ?></span> 
						<?php echo $row[title]; ?>
						</li>
					<?php
					}};
				?>
				<!-- END for-each loop-->
				 
			</div>
			<!-- END Available list-->
			<!------------------------------------------------------------------------->
			<!-- Active list -->
			<div id="menu1" class="tab-pane fade">
			  <!-- list search -->
				<li class="list-group-item">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search available quests">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Search</button>
						</span>
					</div>
				 </li>
				 <!-- END list search -->
				  
				 <!-- list key -->
				 <li class="list-group-item"> <span>Name</span> <span class="pull-right"> Payout / Hours </span></li>
				 <!-- END list key -->
				  
				<!--while loop to run through all Quests-->
				<?php
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * FROM quests WHERE active>'0';";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					?>
						<li onclick="location.href='questInfo.php?<?php echo $row[qid]; ?>';" class="list-group-item">
						<span class="badge"><?php echo $row[hrsReq]; ?>hrs</span> 
						<span class="badge">$<?php echo $row[reward]; ?></span> 
						<?php echo $row[title]; ?>
						</li>
					<?php
					}};
				?>
				<!-- END for-each loop-->
			</div>
			<!-- END Active list-->
			
			<!-- Completed list -->
			<div id="menu2" class="tab-pane fade">
			  <h3>Menu 2</h3>
			  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<!-- list search -->
				<!-- END list search -->
				  
				<!-- list key -->
				<!-- END list key -->
				  
				<!-- Build a for-each loop based on this-->
				<!-- END for-each loop-->
				  
				<!-- Filler for HTML burn when php while loop is in-->
				<!-- END filler-->
			</div>
			<!-- END Completed list-->
		</div>
	</div><!-- END quest browser -->
<?php
include 'footer.php';