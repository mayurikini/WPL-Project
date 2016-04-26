<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	if (mysqli_connect_errno())
			{	echo"error!!".mysqli_connect_error();
			} 
	$bhk=$_POST['no'];
	$type=$_POST['type'];
	
	$q1="SELECT DISTINCT floorplan FROM `apt` WHERE `bhk`='$bhk' AND `type`='$type'";
	$result1=mysqli_query($con,$q1);
	while($row=mysqli_fetch_array($result1)){
			$fp1=$row['0'];		
			echo $fp1.",";
		}
	//header('location:signup.php');
	header('refresh:3; url=signup.php');
	mysqli_close($con);
			
	
?>