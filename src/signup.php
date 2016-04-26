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
		<script>
			$(function(){			
			
					checkEmail();
					var uniqueEmail = false;
					document.getElementById('signup').onsubmit = function() {
						if(!validatePassword()){ 
							alert('Password and confirm password does not match'); 
							return false; 
						}
						
						if(!validatePhone()){ 
							alert('Please enter a valid Phone Number'); 
							return false; 
						}
						
						if(!uniqueEmail){
							alert('Please enter a unique email addresss');
							return false;
						}
						
					}
					
					function validatePassword(){
						var pass = document.getElementById('pass').value;
						var pass_conf = document.getElementById('pass_conf').value;
						return (pass == pass_conf)
					}
					
					function validatePhone(){
						var phone = document.getElementById('phone').value;
						var pattern = new RegExp(/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/);
						return pattern.test(phone);	
					}
					
					function checkEmail(){
						$('input#email').focusout(function(){
							var val = $(this).val();
							uniqueEmail = false;
							$.post('./uniqueEmail.php',{email : val}).done(function(data){
								if(data === 'true'){
									uniqueEmail = true;
									return true;
								}else{
									alert('email address is not unique');
									return false;
								}
							});
						});
					}
					
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
						<a class='btn btn-small' href='mealPlan'>Meal Plans</a>
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
	
	<!-- stuff goes here-->
	
			<form id="signup" name="signup" action="signup_exec.php" method="post" class="form-horizontal">
						<fieldset>
							<legend>Basic Information</legend>
							<div class="control-group">
								<label class="control-label">First Name</label>
								<div class="controls">
									<input type="text" name="firstName" class="input-large" placeholder="First Name" required>
								</div>
							</div>
							
							<div class="control-group ">
								<label class="control-label">Last Name</label>
								<div class="controls">
									<input type="text" name="lastName" class="input-large" placeholder="Last Name" required>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Email</label>
								<div class="controls">
									<input type="email" name="email" id="email" class="input-large" placeholder="username@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Please enter a valid email address">
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Password</label>
								<div class="controls">
									<input type="password" id="pass" name="password" class="input-large" placeholder="******************" pattern=".{8,}" required title="Minimum 8 characters are required">
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Confirm Password</label>
								<div class="controls">
									<input type="password" id="pass_conf" name="cpassword" class="input-large" placeholder="******************" required>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Date of Birth</label>
								<div class="controls">
									<input type="date" name="dob" class="input-large" required>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Gender</label>
								<div class="controls">
								<label class="radio">
										<input type="radio" name="gender" id="" value="male" required> Male
								</label>
								<label class="radio">
										<input type="radio" name="gender" id="" value="female" required> Female
								</label>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Contact Information</legend>
							<div class="control-group ">
								<label class="control-label">Address</label>
								<div class="controls">
									<textarea name="address" class="input-large" rows="3" placeholder="Street Name, Apt #, City, State-Zip" pattern=".{10,}" required title="Minimum 10 characters are required"></textarea>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Phone</label>
								<div class="controls">
									<input type="text" id="phone" name="phone" class="input-large" placeholder="###-###-####" pattern=".{10,12}"  required>
								</div>
							</div>
						</fieldset>
						<fieldset>
						<script>
							$(function(){
								var no = 0;
								$('input:radio[name=no]').click(function() {
									no = $('input:radio[name=no]:checked').val();	
									loadRooms();
								});
								var btype = 0;
								$('input:radio[name=type]').click(function() {
									btype = $('input:radio[name=type]:checked').val();
									
									loadRooms();
								});
								
								function loadRooms(){
								
									$.post('room.php',{no : no, type : btype}).done(function(data){
										$('select#floorplans').empty();
										values = data.split(',');
										var arrayLength = values.length;
										for (var i = 0; i < arrayLength; i++) {
											var a = values[i];
											if (a.trim()) {
												var opt = '<option>'+a+'</option>'
												$('select#floorplans').append(opt);
											}
										}	
									});
								}
								
							
							})
						</script>
							<legend>Preference</legend>
							<div class="control-group ">
								<label class="control-label">Bedrooms</label>
								<div class="controls">
								<label class="radio">
										<input type="radio" name="no" id="" value="1" required> One
								</label>
								<label class="radio">
										<input type="radio" name="no" id="" value="2" required> Two
								</label>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Bedroom Type</label>
								<div class="controls">
								<label class="radio">
										<input type="radio" name="type" id="" value="shared" required> Shared
								</label>
								<label class="radio">
										<input type="radio" name="type" id="" value="private" required> Private
								</label>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Floor Plans</label>
								<div class="controls">
								<select id="floorplans" name="floorplans" required>
								</select>
								</div>
							</div>
							<div class="control-group ">
								<label class="control-label">Meal Plans</label>
								<div class="controls">
								<select name="mealplan" required>
								  <option>Meal-19</option>
								  <option>Meal-14</option>
								  <option>Meal-10</option>
								  <option>Meal-5</option>
								  <option>Meal-Money</option>
								</select>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-success">Submit</button>
									<button type="reset" class="btn">Reset</button>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls">
									</div>
							</div>
						</fieldset>
						
					</form>
		
	
	</div>
	<div class="base-footer">
		<h6>
			Copyright © <span id="currentYear">2015 </span>	
			University Housing
		</h6>
	</div>
</body>
</html>