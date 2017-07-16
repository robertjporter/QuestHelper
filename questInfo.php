<?php include 'header.php';
include 'navigation.php';

//Picking out relative row and pulling data into variable.
	$qid = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
	
	//Get Quest data
	$sql = "SELECT * FROM quests WHERE qid='$qid';";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
?>
<!-- Quest INFO page -->
<br><br><br>
<div id="questinfo">
	<!-- HEADER -->
	<div class="container questinfo-header"> <!-- Banner img as css background -->
		<button id="toQuestLog" class="questinfo-nav">Message</button>
		<button id="toQuestLog" class="questinfo-nav">Quest Log</button>
		
		<!-- Cost/Reward-->
		<br>
		<?php 
			if ($row[reward]>0){
				echo "<span class=''>$".$row[reward]."</span>";
			}
		?>
		<span class=""><?php echo $row[hrsReq]; ?>hrs</span>
		<br>
		
		<!-- Star rating -->
		<?php
			$i = 0;
			while ($i < $row[difficulty]) {
				$i++;
				echo "<span class='glyphicon glyphicon-star'></span>";
			}
		?>
		<br>
		
		<!-- Title -->
		<span class="quest-title">
			<?php echo $row[title]; ?>
		</span>
	</div>
	
	<!-- TIME VITALS -->
	<div class="container questinfo-essentials"> <!-- Banner img as css background -->
			<?php
				//Gather all date times
				$d1= new DateTime($row[subdate]); 
				$d2= new DateTime($row[duedate]);
				$date = new DateTime(date('Y-m-d H:i:s'));
				
				//Calculate hours between submition date and due date
				$interval= $d1->diff($d2);
				$totalHours = ($interval->days * 24) + $interval->h;
				
				//Calculate Hours between submition date and current date
				$interval2= $d1->diff($date);
				$passedHours = ($interval2->days * 24) + $interval2->h;
				
				//Calculate Percentage for progress bar
				$percent = 100*($passedHours/$totalHours);
				$percent2 = floor($percent);
			?>
			<!--Date due progress bar-->
			<span class="">Start <?php echo $d1->format('d/m/y');?></span>
			<span class="">End <?php echo $d2->format('d/m/y');?></span>
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $percent2;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent2;?>%">
				</div>
			</div>
			
			<?php 
				//Calculate Percentage for next progress bar
				$hrspercent = 100*($row[hrsDone]/$row[hrsReq]);
				$hrspercent2 = floor($hrspercent);
			?>
			
			<!--Hours spent progress bar-->
			<span class="">Hrs Spent <?php  echo $row[hrsDone]; ?></span>
			<span class="">Estimated Hrs <?php  echo $row[hrsReq]; ?></span>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $hrspercent2;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $hrspercent2;?>%">
				</div>
			</div>
		<!-- PHP else add an "accept" button -->
	</div>	
	<!-- BODY -->
	<div class="container questinfo-body"> 
		<span>Description</span><br>
		<?php echo $row[description]; ?>
		
		<!-- Objectives -->
		<br><br><span>Objectives</span>
		<?php
			//Get objective data
			$objSql = "SELECT * FROM objectives WHERE qid='$qid' ORDER BY oid;";
			$objResult = $conn->query($objSql);
			
			//loop through objectives
			$obj = 1;
			if ($objResult->num_rows > 0) {
			while($ObjRow = $objResult->fetch_assoc()) {
				?>
				<br>
				<button data-toggle="collapse" data-target="#obj<?php echo $obj; ?>">
					<!-- Identify if competed or not and echo the right glyph -->
					<?php if ($ObjRow[completion]>0){
					echo "<span class='glyphicon glyphicon-ok' style='color:green'></span>";
					} else {
						echo "<span class='glyphicon glyphicon-play-circle' style='color:orange'></span>";
					}?>
					<!-- Objective Title -->
					<?php echo $ObjRow[objTitle]; ?>
					<span class='glyphicon glyphicon-chevron-down' style='color:black'></span>
				</button>
				
				<!-- Dropdown menu with objective Description-->
				<div id="obj<?php echo $obj; ?>" class="collapse">
					<?php echo $ObjRow[objDescription]; ?>
				</div>
				<?php $obj++;
			}};
		?>
		
		<br><br><br><br>
		<!-- Accept -->
	</div>
</div> <!-- END Quest INFO page -->

<!-- Quest LOG page -->
<div id="questlog">
	<button id="toQuestInfo" class="questinfo-nav">quest Info</button>
	Quest log
</div> <!-- END Quest LOG page -->

<!-- -->
<script>
	//Bootstrap didn't want to share it's dynamic nav-bar (don't judge me)
	$("#questlog").hide();
	
	$("#toQuestLog").click(function(){
		$("#questinfo").hide();
		$("#questlog").show();
	});

	$("#toQuestInfo").click(function(){
		$("#questlog").hide();
		$("#questinfo").show();
	});
</script>
<?php
include 'footer.php';