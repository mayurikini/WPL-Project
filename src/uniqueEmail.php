<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	if (mysqli_connect_errno())
			{	echo"error!!".mysqli_connect_error();
			} 
	$email=$_POST['email'];
	
	$q1="SELECT * FROM login WHERE username='$email'";
	$result1=mysqli_query($con,$q1);
		if(mysqli_num_rows($result1)>=1)  {
			echo"false";
		}
		else{
			echo"true";
		}
 	//header('location:.php');
	mysqli_close($con);
	
?>