<?PHP
//Start session
	session_start();	
	//Unset the variables stored in session
	//unset($_SESSION['SESS_USER_NAME']);
	session_unset(); 
	session_destroy(); 
	header('location:Home.php');
	

?>