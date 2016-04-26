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
		
		<script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
		
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
		  
		<!-- jQuery -->
<!--		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="./js/jquery.dataTables.min.js"></script>

		<script src="./js/bootstrap.min.js"></script>
		
		<script>
		$(document).ready( function () {
			$('form#process-app').hide();
			$('form#vacate-app').hide();
			$('table').DataTable();
			
			$('a.app-process').on('click',function(){
				var username = $(this).data('username');
				var statusChange = $(this).data('status-change');
				$('form#process-app [name=username]').val(username);
				$('form#process-app [name=statuschange]').val(statusChange);
				
				$('form#process-app').submit();
				return false;	
				
			});
		
			$('a.vacate-app').on('click',function(){
				var aptNo = $(this).data('apt-no');
				$('form#vacate-app [name=aptno]').val(aptNo);
				$('form#vacate-app').submit();
				return false;
			});
		});
		
		</script>
		
	
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
	<form id='process-app' action='processApp.php', method='post'>
		<input type='text' name='username'>
		<input type='text' name='statuschange'>
	</form>
	<form id='vacate-app' action='vacateApp.php', method='post'>
		<input type='text' name='aptno'/>
	</form>
<?php
	//session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	require_once('connection.php');
		$username=$_SESSION['SESS_USER_NAME'];		//username=admin
		$query1="SELECT * FROM apt WHERE available='1'";
		$result1=mysql_query($query1);
		$query2="SELECT * FROM profile WHERE status IN ('I','S') ";
		$result2=mysql_query($query2);
		$query3="SELECT * FROM apt WHERE available='0'";
		$result3=mysql_query($query3);
		
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
				echo"</tbody></table></div><div class='pull-right'>
				<table border=1 class='table table-hover'><thead>APPLICATIONS
				<tr><th>Name</th>
				<th>Phone</th><th>Floor<th>Type</th>
				<th>Bed</th><th>Submitted On</th><th>Status</th><th>Action</th></tr>
				</thead>";
				while($ro=mysql_fetch_array($result2)){
					$Username=$ro['0'];
					$fname=$ro['1'];
					$lname=$ro['2'];
					$name=$fname." ".$lname;
					$phone=$ro['6'];
					$floor=$ro['8'];
					$type=$ro['9'];
					$bed=$ro['10'];
					$app=$ro['11'];
					$status=$ro['12'];
					if($status=='I') {
						$status="Under Review";
						$action="<a class='app-process' href='' data-username='$Username' data-status-change='A'>Assign</a>";
					}
					else if($status=='S'){
						$status="Submitted";
						$action="<a class='app-process' href='' data-username='$Username' data-status-change='I'>Process</a>";
					}
					
					echo"
					<tbody><tr><td>$name</td><td>$phone</td>
					<td>$floor</td><td>$type</td><td>$bed</td><td>$app</td><td>$status</td><td>$action</td></tr>";
				}
				
				echo"</tbody></table></div></div>";	
				echo "<br><div class='clearfix'><div class='pull-left'>";
		echo "<table border=1 class='table table-hover' id='flat-available'>
		<thead>NOT AVAILABLE APARTMENTS
		<tr><th>Apt No</th><th>Type</th><th>Bed</th>
		<th>Phase</th><th>End Date</th>
		<th>Floorplan</th><th>Action</th></tr>
		</thead><tbody>";
				while($row=mysql_fetch_array($result3)){
					$no=$row['0'];
					$type=$row['1'];
					$bhk=$row['2'];
					$phase=$row['3'];
					//$start_date=$row['5'];
					$end_date=$row['6'];
					$floorplan=$row['7'];
					$action="<a class='vacate-app' href='' data-apt-no='$no'>Vacate</a>";
					echo"<tr><td>$no</td><td>$type</td><td>$bhk</td><td>$phase</td><td>$end_date</td><td>$floorplan</td><td>$action</td></tr>";
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