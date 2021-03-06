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
			div.floor-plans img{
				width : 500px;
			}
			div.page-header h1{
				text-align: center;
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
	<div class="page-header">
	    <h1>Frequently Asked Questions</h1>
	</div>
	<h2><span style= "color:#007FBE">Moving In</span></h2>
      <p><strong>What should I bring?</strong></p>
      <ul>
        <li>Alarm clock</li>
        <li>Bed sheets (University Housing residence halls have extra-long twin beds.)</li>
        <li>Cleaning supplies (toilet cleaner, laundry detergent, dish detergent, etc.)</li>
        <li>Computer or laptop</li>
        <li>First aid kit </li>
        <li>Plunger</li>
        <li>Shower curtain/liner</li>
        <li>Small tool kit (screwdriver, hammer,  a selection of nails and screws, etc.)</li>
        <li>Toilet paper</li>
        <li>Toiletries</li>
        <li>Towels</li>
      </ul>
      <p><em>University Housing</em> apartment residents should also bring:</p>
      <ul>
        <li>Furniture (bed, couch, dining table, etc.)</li>
        <li>Kitchen supplies (pots and pans, plates, utensils, can opener, grocery and pantry items, etc.)</li>
      </ul>
      <p><strong>To whom do I make rent checks payable?</strong><br>
      <em>University Housing</em> </p>
      <p><strong>Are vehicles allowed on campus?</strong><br>
Residents may bring a vehicle to campus. Parking decals are required and may be purchased from the parking office. University Housing and Universtiy Housing have designated parking locations. Visit the parking website for more information.</p>
      <h2><span style= "color:#007FBE">Living on Campus</span></h2>
      <p><strong>How do I get assistance after hours?</strong><br>
Please contact a Peer Advisor, one of the <a href="contact.php">Peer Advisors on call, or one of  University Housing' 24-hour front desks</a>.</p>
      <p><strong>Will I have access to all clubhouses, pools and study rooms?</strong><br>
        Yes, residents have access to all clubhouses, pools, and study centers in the housing community.</p>
      <p><strong>What dining options are available?</strong><br>
<a href="mealPlan.php"> Visit the meal plan link</a> </p>
      <p><strong>What security measures are in place?</strong><br>
      University Police provide frequent patrols throughout University Housing. University Housing management does not assume any legal obligations for personal injury, loss, or damage to personal property. You and/or your parents are encouraged to carry appropriate insurance to cover such losses.</p>
      <p>Anyone with a cell phone can register via Galaxy to receive text alerts in the event of an emergency or disruption to normal University operations.</p>
      <ul>
        <li>University Police</a></li>
        <li>UniTeD Against Sexual Assault</a></li>
      </ul>
      <p><strong>Missing Residential Student Policy</strong><br>
      The purpose of this policy is to establish procedures for the University's response to reports of missing residential students as required by the Higher Education Opportunity Act of 2008. This policy applies to all students who live in University Housing. Download the <a href="missingstudent.pdf">Missing Residential Student Form&nbsp;</a>.</p>

	</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>