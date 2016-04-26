<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","universityhousing");
	if (mysqli_connect_errno())
			{	echo"error!!".mysqli_connect_error();
			} 
	//require_once('connection.php');
	$username=$_POST['username'];
	$statuschange=$_POST['statuschange'];
	$statusI="I";
	$statusA="A";
	if(strcmp($statuschange,$statusI) == 0){
		$q1="UPDATE `profile` SET `status`='$statuschange' WHERE `username`='$username'";
		$result1=mysqli_query($con,$q1);
	}
	if(strcmp($statuschange,$statusA) == 0){
		$q2="SELECT t1.no from apt t1,profile t2 where t1.available=1 and t2.username='$username' AND t1.floorplan=t2.floor AND t1.type=t2.type AND t1.bhk=t2.bhk limit 1";
		$result2=mysqli_query($con,$q2);
		while($row=mysqli_fetch_array($result2)){
			$no=$row['0'];
		}
			
			if ($no !== ''){
				$q3="UPDATE `profile` SET `aptno` = '$no',`status` = '$statuschange' WHERE `username`	='$username'"; 
				$q4="UPDATE `apt` SET `available` = '0' WHERE `no`	='$no'";
				$result3=mysqli_query($con,$q3);
				$result4=mysqli_query($con,$q4);
			}
		else{
			echo"no such apt available right now";
		}
	
	}
	
header('location:adminHome.php');
//header('refresh:3; url=adminhome.php');

mysqli_close($con);
			
	
?>