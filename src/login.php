<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="0">
		<link rel="shortcut icon" type="image/png" href="./img/favicon.ico">

		<title>University Housing</title>

		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/base.css">
		
		<script src="./js/jquery-1.8.3.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		
		<style>
		
		
			div.dead-center {
				position: absolute;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				margin: auto;
			}

			div.sign-in-wrapper {
				width: 485px;
				height: 335px;
			}

			div.sign-in-wrapper {
				border: 2 px solid rgb(0, 127, 190);
				box-shadow: 9px 12px 31px rgb(51, 51, 51);
				-webkit-box-shadow: 9px 12px 31px rgb(51, 51, 51);
				-moz-box-shadow: 9px 12px 31px #333333;
				border-radius: 20px;
			}

			div.sign-in-form {
				width: 450px;
				height: 300px;
				border-radius: 14px;
			}
		</style>
</head>
<body>
	<div class="base-navbar">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-inner">
				<div class="container" style="width: auto;">
					<img class="logo-mini" src="./img/logo.png">
					<div id="right-nav-options" class="btn-group pull-right">
						<?php 
						session_start();
						//$_SESSION['SESS_USER_NAME'] = $username;
						$username=$_SESSION['SESS_USER_NAME'];
						//echo '$username';
						if(isset($_SESSION['SESS_USER_NAME']) && strcmp($username,'ADMIN') != 0) {
						echo"<a class='btn btn-small' href='userHome.php'>Profile</a>";
						}
						if(isset($_SESSION['SESS_USER_NAME']) && strcmp($username,'ADMIN') == 0 ) {
						echo"<a class='btn btn-small' href='adminhome.php'>Home</a>";
						}
						if(!isset($_SESSION['SESS_USER_NAME'])){
						echo"<a class='btn btn-small' href='home.php'>Housing</a>";
						}
						if(isset($_SESSION['SESS_USER_NAME'])){
						echo"<a class='btn btn-small' href='appView.php'>Availability</a>";
						}
						if(!isset($_SESSION['SESS_USER_NAME'])){
						echo"<a class='btn btn-small' href='signup.php'>Apply Now</a>";
						}
						echo"<a class='btn btn-small' href='uvpricing.html'>Floor Plans</a>
						<a class='btn btn-small' href='mealPlan.php'>Meal Plans</a>
						<a class='btn btn-small' href='faq.html'>FAQs</a>
						<a class='btn btn-small' href='contact.html'>Contact US</a>";
						if(isset($_SESSION['SESS_USER_NAME'])){
							echo '<a class="btn btn-small" href="logout.php" >Logout</a>';
						}
						else{
							echo '<a class="btn btn-small" href="login.php" >Login</a>';
						}
						
						?>
		
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="base-content">
	
<div class="sign-in-wrapper dead-center ">
				<div class="well well-small sign-in-form dead-center ">
					<form id="doLogin" name="doLogin" action="login_exec.php" method="post" class="form-horizontal">
						<fieldset>
						<!--the code bellow is used to display the message of the input validation-->
							<?php
							if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
							echo '<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) {
							echo '<li>',$msg,'</li>'; 
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
							}
							?>

							<legend>Sign in</legend>
							<div class="control-group">
								<label class="control-label">User Name</label>
								<div class="controls">
									<input type="text" name="username" value="" id="" class="input-large" placeholder="username">
								</div>
							</div>
							
							<div class="control-group ">
								<label class="control-label">Password</label>
								<div class="controls">
									<input type="password" name="password" id="" class="input-large" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">Sign in</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
	</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>