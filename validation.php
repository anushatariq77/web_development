<?php

session_start();
$email=$_POST['uname'];
$password=$_POST['psw'];
if($email=='rija nadeem' && $password=='rija')
{
	header('location:http://localhost/web/ec/pointex.html');
	
}
else{
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="select * from user where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{   
	$_SESSION['loggedIn']=$email;
	
header('location:http://localhost/web/ec/eg.php');
	
}
else
{ ?>
	<script type="text/javascript">
		alert('you are not a registered user. sign in first');
	</script>
	<?php
}}

?>