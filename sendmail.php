<?php
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];

		$to = "saisantosh8522892638@gmail.com";
		$subject = "Request From: ". $name;
		$message = "<h2> Request From the User </h2>
			<h4>Name: ".$name."</h4>
			<h4>Email: ".$email."</h4>
			<h4>Request: ".$msg."</h4>";

		$headers = "Content-Type: text/html;charset=utf-8"."\r\n";
		$headers .= "From: ".$name."<".$email.">";
		if(mail($to, $subject, $message, $headers))
		{
			echo '<script language="javascript">';
		echo 'alert("Request Sent Successfuly")';
			echo '</script>';
			include 'request.php';
	}
		
		else{

			echo "mail sending failed";
			

		}
	}


?>