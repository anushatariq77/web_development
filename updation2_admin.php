<?php

$cname=$_POST['cname'];
$cmodel=$_POST['cmodel'];
$cbrand=$_POST['cbrand'];
$feco=$_POST['feco'];
$cprice=$_POST['cprice'];
$category=$_POST['category'];
$capacity=$_POST['capacity'];
$color=$_POST['color'];
$fuel=$_POST['fuel'];
$carid=$_POST['carid'];



$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="update cars set cname='$cname', model='$cmodel', brand='$cbrand', fuel_economy='$feco', price='$cprice', category='$category', seat_capacity='$capacity', fuel_type='$fuel', color='$color' where cid=$carid  ";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>


<!DOCTYPE html>
<html>
<head>
	<title>insertion</title>
</head>
<body>
<h1>CARS RECORD MANAGEMENT</h1>
<p>
	<?php

    if($status==1){
    	echo "Record inserted."; ?>
			
			To view updation <a href="view_admin.php"> click here</a> <?php
    }
    else
    	echo "insertion failed";

	?>
</p>

</body>
</html>