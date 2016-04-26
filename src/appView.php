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
	
<?php
	//session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	require_once('connection.php');
		$username=$_SESSION['SESS_USER_NAME'];		//username=admin
		$query1="SELECT * FROM apt WHERE available='1'";
		$result1=mysql_query($query1);

		echo "<br><div class='clearfix'><div class='pull-left'>";
		echo "<table border=1 class='table table-hover' id='flat-available'>
		<thead>AVAILABLE APARTMENTS
		<tr><th>Apt No</th><th>Type</th><th>Bed</th>
		<th>Phase</th><th>Start Date</th><th>End Date</th>
		<th>Floorplan</th></tr>
		</thead><tbody>";
				while($row=mysql_fetch_array($result1)){
					$no=$row['0'];
					$type=$row['1'];
					$bhk=$row['2'];
					$phase=$row['3'];
					$start_date=$row['5'];
					$end_date=$row['6'];
					$floorplan=$row['7'];
					echo"<tr><td>$no</td><td>$type</td><td>$bhk</td><td>$phase</td><td>$start_date</td><td>$end_date</td><td>$floorplan</td></tr>";
				}
				echo"</tbody></table></div></div>";
					mysqli_close($con);

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