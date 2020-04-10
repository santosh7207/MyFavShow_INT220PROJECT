<?php

if (isset($_POST['submit'])) {

	include "DBConnect.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$q = " insert into submit(name, email, message)
			values('$name', '$email','$message' )";

	if($conn->query($q)){
		
		include 'sendmail.php';
		
	}
	else{
		echo "error in inserting values $conn-->error";
	}

}


?>