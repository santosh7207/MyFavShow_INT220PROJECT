<?php

if (isset($_REQUEST["login"])) {

	include "DBConnect.php";
	mysqli_select_db($conn, "test");

	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$query=mysqli_query($conn, "select * from register where email='$email' && password='$password'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount==true){
		
		include "land.php";
		
		echo '<script language="javascript">';
		echo 'alert("Login Sucessfull")';
			echo '</script>';
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Email / Password is incorrect please try again")';
			echo '</script>';
			include "login.php";
	}
}
?>