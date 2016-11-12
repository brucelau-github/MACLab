<?php include 'inc/common.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="the login webpage">
    <meta name="author" content="Jianye Liu">
    <title>login page with facebook</title>
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">

  </head>
  <body>
  	<div class="container">
  		<form class="form-signin">
  			<h2 class="form-signin-heading">Sign in</h2>
  			<label for="inputEmail" class="sr-only">Email address</label>
  			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  			<label for="inputPassword" class="sr-only">Password</label>
  			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  			<div class="checkbox">
  				<label>
  					<input type="checkbox" value="remember-me"> Remember me
  				</label>
  			</div>
  			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <?php include 'facebook-login-button.php';?>
  		</form>
  		<div class="fb-button"></div>
  	</div>
  	<!-- javascript download here -->
  	<script src="bower_components/jquery/dist/jquery.min.js" ></script>
  	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
  	<!-- facebook login -->
  </body>
  </html>