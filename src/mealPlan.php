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
	    <h1>Meal Plans</h1>
	</div>
	<p><span style="color:#007FBE; font-family:trebuchet ms,helvetica,sans-serif; font-size:x-large">WHAT</span></p>

<p><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:10pt">A meal plan is a way to eat on campus and save money! The meal plans have two separate parts: Dining Hall swipes &amp; Meal Money:</span></span></p>

<p><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:10.0pt">&bull;</span><span style="font-size:10.0pt">Dining Hall swipes: </span><span style="font-size:10pt">Weekly amount of dining hall visits you&rsquo;re allotted per week, ranging from 10 to 19 meals per week (number depends on the meal plan you choose). These swipes are significantly cheaper than what non-meal plan holders pay for Dining Hall access, below is a chart with your savings depending on the meal plan you choose:</span></span></p>

<p><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:10.0pt">&bull;</span><span style="font-size:10.0pt">Meal Money: </span><span style="font-size:10pt">Semesterly</span><span style="font-size:10pt"> balance you&rsquo;re allotted (amount depends on the meal plan you choose) for use in University retail locations. Meal Money works just like a debit card, deducting charges from the balance. For example, if you have the Meal 10 which comes with $150 in Meal Money and spend $6 at Subway, your remaining balance is $144 for the rest of the semester. At the end of each semester, remaining Meal Money balances on traditional meal plans (Meal 19, 14, 10 and 7) are forfeited. If you have the Meal Money plan, that balance is available through the last day of the current school year&rsquo;s spring semester. If you run out of Meal Money during the semester, you can always reload through the Dining website (Meal Plans &ndash; Purchase Meal Plans).&nbsp;</span><span style="font-size:10pt">All first year residents are required to have a meal plan.&nbsp;</span><span style="font-size:13px">All purchases made with Dining Dollars or Meal Money at participating University retail locations will get 10% off!.
	<p><span style="color:#007FBE; font-family:trebuchet ms,helvetica,sans-serif; font-size:x-large">WHY</span></p>

<p><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:10pt">College is stressful enough, let us take care of the food! We are open throughout the week during high traffic times to fit your busy schedule and get you the nutrients you need! Plus, cooking in a small microwave will get really boring, (and expensive with pre-made dinners) really fast. Come join your friends for lunch in the Caf&eacute; or bring your student organization to dinner in the Dining Hall and chat away while eating however much you want. 
	<table class="table table-hover">
		<thead>
            <tr>
              <th>Plan</th>
              <th># Meals/Week</th>
              <th>Cost w/tax</th>
              <th>Deposit on Marketplace</th>
              <th>Final Cost posted to student account</th>
            </tr>
			</thead>
			<tbody>
            <tr>
              <td>Meal 19</a></td>
              <td>19/Week with $50 Meal Money</td>
              <td>$1973.06</td>
              <td>$50</td>
              <td>$1923.06</td>
              
            </tr>
            <tr>
              <td>Meal 14</a></td>
              <td>14/Week with $50 Meal Money</td>
              <td>$1751.57</td>
              <td>$50</td>
              <td>$1701.57</td>
            </tr>
            <tr>
              <td>Meal 10</a></td>
              <td>10/Week with $50 Meal Money</td>
              <td>$1665.82</td>
              <td>$50</td>
              <td>$1615.82</td>
            </tr>
            <tr>
              <td>Meal 5</a></td>
              <td>5/Week with $50 Meal Money</td>
              <td>$982.35</td>
              <td>$50</td>
              <td>$932.35</td>
            </tr>
            <tr>
              <td>Meal Money</a></td>
              <td>$750 Meal Money</td>
              <td>$750</td>
              <td>$50</td>
              <td>$700</td>
            </tr>
            
			</tbody>
          </table>
		  <p><span style= "color:#007FBE; font-family:trebuchet ms,helvetica,sans-serif; font-size:x-large">Dining Fun Facts:</span></p>

<ul>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">Over 52,000 cookies are made per school year for the Outtakes locations.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">36,432 pounds of Pub fries are eaten each year.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">119,340 ounces of Frappuccino are made at the Bookstore Coffee Shop each year (that&#39;s almost 10,000 cups)!</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">More than 27,200 tomato slices are used in Outtakes sandwiches annually.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">More than 313,500 pepperonis are used for Dining pizzas each year!</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">About 435,600 slices of turkey are used at the Subway each school year.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">This year, over 763,402 Chick-fil-A nuggets will be produced by the Chick-fil-A.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">102,000 stir sticks for Starbucks beverages are distributed each year.</span></span></li>
	<li><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:small">On average, 25,000 meals are served daily, which means our average staffer serves 109 people daily and over 26,000 annually!</span></span></li>
</ul>

	</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>