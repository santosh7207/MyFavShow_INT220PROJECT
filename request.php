<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="req.css"
	>
</head>
<body>
<div class="contact-tittle">
	<h1>REQUEST US</h1>
	<br>
	<h2>for Movie or Tv Shows</h2>	
</div>
<div class="contact-form">
	<form id="contact-form" method="post" action="insertData2.php">
		<center>
		<input type="text" name="name" class="form-control" placeholder="Your Name" required>
		<br>
		<input type="email" name="email" class="form-control" placeholder="Your Email" required>
		<br>
		<textarea name="message" class="form-control" placeholder="Enter Your Request" rows="2"></textarea>
		<br>
		<input type="submit" class="submit" name="submit" value="Send message">
		</center>

		
	</form>
	
</div>

</body>
</html>
<?php include 'footer.php'; ?>