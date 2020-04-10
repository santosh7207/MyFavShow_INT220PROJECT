
<!DCTYPE html>
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
      border: 2px solid #4caf50;
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
    .logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      border-radius: 10px 10px;
      margin-top: 10px; 
    }
    </style>
    <script type="text/javascript">
      function check()
      {
            var c,x,y;
    
       c=document.getElementById("t1").value; 
       if(c=="")
      {
        alert("Please fill the E-Mail ID");
         return false;
      }
      x=c.indexOf("@");
      y=c.indexOf(".");
      if(x<1)
      {alert("@ is missing in your email id");
       return false;}
      if(y<0)
      {alert(" .  is missing in your email id");
       return false;}
      if(y-x!=6)
      {alert("Invalid Email ID");
       return false;}
      if(c.length>y+2)
      {;}
      else
      {alert("Invalid EMail ID");
       return false;}
        var a;
        a=document.getElementById("t2").value;
        if(a=="")
      {
        alert("Please fill the password");
        return false;
      }
      else
        if(a.length<8)
      {
       alert("Password must contain six characters only");
       return false;
      }
      }
    </script>
  </head>
  <body>
    <img class="logo" src="F:\INT 219 (Frontend)\Project(SEM 5)\images\welcome.gif" alt="">
    <form action="fetchData.php" method="POST">
      <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <input id="t1" type="text" name="email" placeholder="Email" value="">
        </div>
        <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input id="t2" type="password" name="password" placeholder="password" value="">
        </div>
        <button class="btn" type="submit" name="login" onclick="return check()">Login</button><br>
        <p style="font-size: 16px;color: white;">
        Don't have an account?  <a style="color: black;font-size: 20px" href="register.php"><b>Sign Up</b></a>
      </div>
    </form>
  </body>
</html>