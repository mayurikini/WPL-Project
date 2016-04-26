<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	if (mysqli_connect_errno())
			{	echo"error!!".mysqli_connect_error();
			} 
	$aptno=$_POST['aptno'];
	
	$q1="UPDATE `apt` SET `available` = '1', `start_date`=NOW() WHERE `no`='$aptno'";
	$result1=mysqli_query($con,$q1);
	$q2="UPDATE `profile` SET `aptno` = NULL, `status` = 'V' WHERE `aptno`='$aptno'";
	echo $q2;
	$result2=mysqli_query($con,$q2);
	header('location:adminHome.php');
	mysqli_close($con);
			
	
?>