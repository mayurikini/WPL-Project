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
	$floor=$_POST['floorplan'];
	$meal=$_POST['mealplan'];
	$_SESSION['x']=0;
	//$id=$x;
	$status="S";
	$qry1="INSERT INTO login(username,password,fname,lname)VALUES('$username','$password','$fname','$lname')";
	$qry2="INSERT INTO profile(username,fname,lname,dob,gender,address,phone,meal,floor,type,bhk,status)
	VALUES('$username','$fname','$lname','$dob','$gender','$address','$phone','$meal','$floor','$type','$bhk','$status')";
	
	$result1=mysql_query($qry1);
	$result2=mysql_query($qry2);
	
	if($result && $result2)
	{
		//$_SESSION['x']=$_SESSION['x']+1;
		header("location: userHome.php");
	}
	else
	{
		header("location:signup.php");
		echo '<script type="text/javascript"> alert("Connection failed!!");</script>';
	
	}
?>
	