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
			  <li class="list-group-item">
				<span>Name</span>
				<span class="pull-right">
					Payout / Hours
				</span>
			  </li>
			  <!-- END list key -->
			  
			  <!-- Build a for-each loop based on this-->
			  <li class="list-group-item">
				<span class="badge">14hrs</span> 
				<span class="badge">$200</span> 
				Item one
			  </li>
			  <!-- END for-each loop-->
			  
			  <!-- Filler for HTML burn when php is in-->
			  <li class="list-group-item"><span class="badge">56hrs</span><span class="badge">$1900</span> Item two</li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400ph</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span> <span class="badge">$1900</span> Item two </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50ph</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four  </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span><span class="badge">$1900</span> Item two</li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400ph</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span> <span class="badge">$1900</span> Item two </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50ph</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four  </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400</span> Item five</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400ph</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span> <span class="badge">$1900</span> Item two </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50ph</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four  </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span><span class="badge">$1900</span> Item two</li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400ph</span> Item five</li>
			  <li class="list-group-item"><span class="badge">56hrs</span> <span class="badge">$1900</span> Item two </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$50ph</span> Item three</li>
			  <li class="list-group-item"><span class="badge">200hrs</span> <span class="badge">$20000</span> Item four  </li>
			  <li class="list-group-item"><span class="badge">4hrs</span> <span class="badge">$400</span> Item five</li>
			  <!-- END filler-->
			</div>
			<!-- END Available list-->
			
			<!-- Active list -->
			<div id="menu1" class="tab-pane fade">
			  <h3>Menu 1</h3>
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