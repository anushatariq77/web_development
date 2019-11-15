

<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <link rel="icon" type="image/icon" href="fev.png"/>
  <link rel="stylesheet" type="text/css" href="temp2.css">
  <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
<body>
<form class="forms" method="post" action="validation.php">
  <h1>Log In</h1>
  <div class="imgcontainer">
    <img src="fev.png" alt="Logo" class="pic">
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required>

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