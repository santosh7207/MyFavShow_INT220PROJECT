<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css" media="screen">
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url("regb.jpg");
      background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
     margin: 0;
    padding: 0;
      background-position: center center;
    box-sizing: border-box;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size:cover;
    }
    .login-box {
      width: 280px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 13px;
    }
    .login-box h1 {
      float: left;
      font-size: 40px;
      border-bottom: 6px solid #4caf50;
      margin-bottom: 50px;
      padding: 13px;
    }
    .textbox {
      width: 100%;
      overflow: hidden;
      font-size: 20px;
      padding: 8px 0;
      margin: 8px 0;
      border-bottom: 1px solid #4caf50;
    }
    .textbox i {
      width: 26px;
      float: left;
      text-align: center;
    }
    .textbox input {
      border: none;
      outline: none;
      background: none;
      color: white;
      font-size: 18px;
      width: 80%;
      float: left;
      margin: 0 10px;
    }
    .btn {
      width: 100%;
      background: none;
      border: 2px solid #4caf50]];
      color: white;
      padding:  5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0;
    }
    h1 {
      color: white;
      text-align: center;
    }
    </style>
<script type="text/javascript">
    function check()
    {
        var a;
      a=document.getElementById("t1").value;
      if(a=="")
      {
        alert("Please enter the First name");
        return false;
      }
    
      var b;
      b=document.getElementById("t2").value;
      if(b=="")
      {
        alert("Please enter the Last name");
        return false;
      }
      if(b<4)
      {
        alert("Enter valid Last name");
        return false;
      }
      var c,x,y;
      c=document.getElementById("t3").value; 
      if(c=="")
      {
          alert("Please fill the E-Mail ID");
          return false;
      }
      x=c.indexOf("@");
      y=c.indexOf(".");
      if(x<1)
      {
        alert("@ is missing in your email id");
        return false;
      }
      if(y<1)
      {
        alert(" .  is missing in your email id");
        return false;
      }
      if(y-x!=6)
      {
        alert("Invalid E-Mail ID");
        return false;
      }
      if(c.length>y+2)
      {;}
      else
      {
        alert("Invalid E-Mail ID");
        return false;
      }
      var d;
      d=document.getElementById("t4").value;
      if(d=="")
      {
        alert("Please fill the password");
        return false;
      }
      else
        if(d.length<8)
      {
       alert("Password must contain Eight characters");
       return false;
      }

    }
  </script>
  </head>
 
  <body>

    <form action="insertData.php" method="POST">
    
      <div class="login-box">
		<h1>Sign Up</h1>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input id="t1" type="text" name="firstName" placeholder="First name" value="">
		  </div>
		  <div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input id="t2" type="text" name="lastName" placeholder="Last name" value="">
		  </div>
        <div class="textbox">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
          	<input id="t3" type="text" name="email" placeholder="Email" value="">
        </div>
        <div class="textbox">
          	<i class="fa fa-lock" aria-hidden="true"></i>
          	<input id="t4" type="password" name="password" placeholder="password" value="">
        </div>
        <button class="btn" type="submit" name="register" onclick="return check()">Sign up</button><br><p style="font-size: 16px;color: white;">
        Already have an account? <a style="color: black;font-size: 20px;" href="login.php"><b>Login</b></a></p>
      </div>
  
    </form>
  </body>
  </html>
   

