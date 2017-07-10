<body>
	<style>
		.RJP_logIn{
			background: url(img/sky.jpg);
		}
	</style>
	
	<!-- Modals-->
	<div class="modal fade" id="signedUpModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Congratulations! You are now signed up!</h4>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Login section-->
	<div class="RJP_logIn container vertical-center">
		<form class="form-signin" action='inc/login.inc.php' method='POST'>
			<h1 class="RJP_header">QUEST HELPER<span class="RJP-smalltext">.org<span></h1>
			<br>
			<input id="username" type="text" class="RJP-split form-control" name="uid" placeholder="User Name" required="" autofocus="" />
			<input id="password" type="password" class="RJP-split form-control" name="pwd" placeholder="Password" required=""/>      
			<button class="btn btn-lg btn-primary btn-block" type="submit">GO!</button>   
			<br>
			<div id="quest-space" class="row">
				<a  href="signup.php" id="signUp" class="RJP-loginExtra col-xs-6 text-center">
					Sign Up Now!
				</a>
				<div id="forgotPass" class="RJP-loginExtra col-xs-6 text-center">
					Forgot Password?
				</div>
			</div>
			<br>
			<a href="https://blog.questhelper.org/" class="btn btn-lg btn-success btn-block">ABOUT QUEST HELPER</a>
		</form>
	</div>
	
	<!--check if user just signed up -->
	<?php
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($url, 'error=signed_up') !== false){
			?><script> $("#signedUpModal").modal(); </script><?php
		}
	?>
</body>