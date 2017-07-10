
<?php include 'header.php';?>
	<style>
		.RJP_logIn{
			background: url(img/sky.jpg);
		}
	</style>
	
	<!-- Modals -->
	<div class="modal fade" id="missingFieldsModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">You need to fill in all fields</h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="badUidModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">This Username is already taken</h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="alreadyLoggedInModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">You are already logged in</h4>
				</div>
			</div>
		</div>
	</div>
	
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
	
	<!-- displays signup form but checks status of page and triggers modal first -->
	<?php
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($url, 'error=empty') !== false){
			?><script> $("#missingFieldsModal").modal(); </script><?php
		}
		
		elseif (strpos($url, 'error=username') !== false){
			?><script> $("#badUidModal").modal(); </script><?php
		}
		
		if(isset($_SESSION['id'])) {
			?><script> $("#alreadyLoggedInModal").modal(); </script><?php
		} else {
			echo "
			<div class='RJP_logIn container vertical-center'>
				<form class='form-signin' action='inc/signup.inc.php' method='POST'>
					<h1 class='RJP_header'>Register New User</h1>
					<input class='RJP-split form-control' type='text' name='first' placeholder='First Name'>
					<input class='RJP-split form-control' type='text' name='last' placeholder='Last Name'>
					<input class='RJP-split form-control' type='text' name='uid' placeholder='User Name'>
					<input class='RJP-split form-control' type='password' name='pwd' placeholder='Password'>
					<br>
					<div id='forgotPass' class='RJP-loginExtra text-center'>
						Forgot Password?
					</div> 
					<br>
					<button class='btn btn-lg btn-primary btn-block' type='submit'>SIGN UP!</button>
					<a href='index.php' class='btn btn-lg btn-success btn-block' type='submit'>BACK TO HOME</a>
				</form>
			</div>
		";
		}
	?>
</body>

<?php include 'footer.php';?>

</html>