<?php 
session_start();
if(isset($_POST['uname']))
$user=$_POST['uname'];
$password=$_POST['psw'];


if($user=='tese' && $password=='rija')
{
  header('location:http://localhost/web/ec/pointex.html');
  
} 
else
{ ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Admin Portal</title>
  </head>
  <body>
   <p>
   You entered incorrect information. 
  
   <a href="admin2.php">Go back to Admin Panel </a>
   </p>

   </body>
   </html>
   <?php 

} 
?>