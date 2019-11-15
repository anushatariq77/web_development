<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="icon" type="image/icon" href="fev.png"/>
  <link rel="stylesheet" type="text/css" href="temp.css">
  <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
<body>
  <form class="forms" method="post" action="insertuser.php">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
   <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" required>

     <div class="clearfix"> <a href="eg.php" style="text-decoration: none;"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>