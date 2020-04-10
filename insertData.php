<?php

if (isset($_POST['register'])) {

	include "DBConnect.php";
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$q = " insert into register(firstName, lastName, email, password)
			values('$firstName','$lastName','$email','$password' )";

	if($conn->query($q)){
		
		
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully")';
		echo '</script>';
		include "login.php";
	}
	else{
		echo "error in inserting values $conn-->error";
	}

}


?>