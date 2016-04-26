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
						echo"<a class='btn btn-small' href='uvpricing.php'>Floor Plans</a>
						<a class='btn btn-small' href='mealPlan.php'>Meal Plans</a>
						<a class='btn btn-small' href='faq.php'>FAQs</a>
						<a class='btn btn-small' href='contact.php'>Contact US</a>";
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
	
				<h2>WELCOME!</h2>
				<?php 
					//session_start();
					$con=mysqli_connect("localhost","root","","universityhousing");
					require_once('connection.php');
					$username=$_SESSION['SESS_USER_NAME'];		//username=admin
					$query="SELECT * FROM profile WHERE username='$username'";
					$result=mysql_query($query);
					while($ro=mysql_fetch_array($result)){
					//$Username=$ro['0'];
					$fname=$ro['1'];
					$lname=$ro['2'];
					$name=$fname." ".$lname;
					$dob=$ro['3'];
					$gender=$ro['4'];
					$add=$ro['5'];
					$phone=$ro['6'];
					$meal=$ro['7'];
					$floor=$ro['8'];
					$type=$ro['9'];
					$bed=$ro['10'];
					$app=$ro['11'];
					$status=$ro['12'];
					$apt=$ro['13'];
					if($status=='I') {
						$status="Under Review";
						$apt="N/A";
						}
					else if($status=='S'){
						$status="Submitted";
						$apt="N/A";
						}
					else if($status=='A'){
						$status="Assigned";
						}
					
					}
						echo"Hello $fname<br>";
						echo "<h2>Profile</h2>";
						echo "<table><tr><td>Username</td><td>$username</td></tr>
						<tr><td>Name</td><td>$name</td></tr>
						<tr><td>Date of Birth</td><td>$dob</td></tr>
						<tr><td>Gender</td><td>$gender</td></tr>
						<tr><td>Address</td><td>$add</td></tr>
						<tr><td>Phone</td><td>$phone</td></tr>
						<tr><td>Meal Plan</td><td>$meal</td></tr>
						<tr><td>Floor Plan</td><td>$floor</td></tr>
						<tr><td>Apartment Type</td><td>$type</td></tr>
						<tr><td>Bedroom</td><td>$bed</td></tr>
						<tr><td>Application Submitted date</td><td>$app</td></tr>
						<tr><td>Application Status</td><td>$status</td></tr>
						<tr><td>Apartment no.</td><td>$apt</td></tr>
						</table>";
					?>
		</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>