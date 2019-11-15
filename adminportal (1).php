<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
  <link rel="icon" type="image/ico" href="my.png"/>
	<link rel="stylesheet" type="text/css" href="temp2.css">
  <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
<body>
<form class="forms" method="post" action="admin_verification.php">
  <h1>Admin portal</h1>
  <div class="imgcontainer">
    <img src="logo.png" alt="Logo" class="pic">
  </div>

  <div class="container">

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="ename"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="ename" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="#" style="color:blue">Forgot password?</a></span>
  </div>
</form>
  
  
	

</body>
</html>