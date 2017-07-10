<?php include 'header.php';
include 'navigation.php';
?>
<!-- Quest INFO page -->
<br><br><br>
<div id="questinfo">
	<div class="container questinfo-header"> <!-- Banner img as css background -->
		<button id="toQuestLog" class="questinfo-nav">quest Log</button>
		<span class="queststatusicon glyphicon glyphicon-star"></span>
		<span class="quest-title">Hello world</span>
	</div>
	
	<div class="container questinfo-essentials"> <!-- Banner img as css background -->
		<span class="">reward</span>
		<!-- PHP if started-->
			<span class="">Time started</span>
			<span class="">Time till completion</span>
			<span class="">Time remaining</span>
			<span class="quest-timebar">Hello world Hello world Hello world Hello world Hello world</span>
		<!-- PHP else add an "accept" button -->
		<br>
		<span>granted items</span>
		<!-- Tooltip filename -->
		<!-- PHP IF accepted allow download -->
			<span class="queststatusicon glyphicon glyphicon-file"></span>
			<span class="queststatusicon glyphicon glyphicon-file"></span>
			<span class="queststatusicon glyphicon glyphicon-file"></span>
	</div>	
	
	<div class="container questinfo-body"> <!-- Banner img as css background -->
		<br><br><span>Description</span><br>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		<!--PHP if there is info in location pannel add in google maps api -->
		<br><br><span>Location</span>
		
		<br><br><span>Objectives</span><br>
		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
		<br><br>
		The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
		<br><br>
		Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
		<br><br>
		Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
		<br><br>
		
		<span>Client</span>
			<!--PHP again if there is info in location pannel add in google maps api -->
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