<?php  

	session_start();
	require_once('connection.php');
	$fname=$_POST['firstName'];
	$lname=$_POST['lastName'];
	$username=$_POST['email'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$bhk=$_POST['no'];
	$type=$_POST['type'];
	$floor=$_POST['floorplans'];
	$meal=$_POST['mealplan'];
	$_SESSION['x']=0;
	//$id=$x;
	$status="S";
	$qry1="INSERT INTO login(username,password,fname,lname,user)VALUES('$username','$password','$fname','$lname','0')";
	$qry2="INSERT INTO profile(username,fname,lname,dob,gender,address,phone,meal,floor,type,bhk,timestamp,status)VALUES
	('$username','$fname','$lname','$dob','$gender','$address','$phone','$meal','$floor','$type','$bhk',NOW(),'$status')";
	
	$result=mysql_query($qry1);
	$result2=mysql_query($qry2);
	
	if($result)
	{	if($result2)
	
		//$_SESSION['x']=$_SESSION['x']+1;
		header("location: home.php");
	}
	else
	{
		header("location:signup.php");
		echo '<script type="text/javascript"> alert("Connection failed!!");</script>';
	
	}
?>
	