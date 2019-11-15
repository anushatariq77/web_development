<?php 

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['psw'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q=" insert into user(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password') " ;
$i=mysqli_query($con,$q);
mysqli_close($con);
if ($i)
{
	echo "Registration Successfully!";
	?> 
<!Doctype html>	
<head></head>

<html>
<body>
<p><br><a href="eg.php">Go To Home Page</a></p>
</body>
</html>


<?php
}

else {
	echo " Registration failed!";
}

?>