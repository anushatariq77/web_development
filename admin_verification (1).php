<?php 
session_start();
if(isset($_POST['uname'])){
$user=$_POST['uname'];
$password=$_POST['psw'];


if($user=='rija nadeem' && $password=='rija')
{
  header('location:http://localhost/web/pointex.html');
  
} }
else
{ ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
  <link rel="icon" type="image/ico" href="my.png"/>
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

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
  
  
</body>
</html>


	
	<script type="text/javascript">
		alert('you entered incorrect information');
	</script>
	<?php
} 

?>