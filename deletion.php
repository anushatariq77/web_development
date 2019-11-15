<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="delete from cars where cid='".$_GET['del_id']."'";
$query=mysqli_query($con,$q);
header('location:http://localhost/web/ec/delete2.php');
?>

