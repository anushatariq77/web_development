<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
  <link rel="icon" type="image/icon" href="fev.png"/>
	<link rel="stylesheet" type="text/css" href="temp2.css">
  <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
  <style type="text/css">

  body
{
  background: url(car3.jpg);
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
<form class="forms" method="post" action="admin_verification.php">
  <h1>Admin portal</h1>
  <div class="imgcontainer">
    <img src="fev.png" alt="Logo" class="pic">
  </div>

  <div class="container">

    <label for="uname"><b style = "color:black ; font-size: 20px;">Username</b></label>
    <input style = "color:black ; font-size: 20px;" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b style = "color:black ; font-size: 20px;">Password</b></label>
    <input  style = "color:black; font-size: 20px;" type="password" placeholder="Enter Password" name="psw" required>

    <button  style = "color:black ; font-size: 20px;" type="submit">Login</button>
  </div>

  <div class="container">
    <button  style = "color:black ; font-size: 15px;" type="button" class="cancelbtn"><a style = "color:black ; font-size: 15px; text-decoration: none; "  href="eg.php">Cancel</a></button>
  </div>
</form>
  
  
</body>
</html>
