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
$f=$_POST['myfile'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="insert into cars (brand,cname,model,fuel_economy,price,category,seat_capacity,fuel_type,color,image) values ('$cbrand','$cname','$cmodel','$feco',$cprice,'$category',$capacity,'$fuel','$color','$f')";
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
    	echo "record inserted";
    }
    else
    	echo "insertion failed";

	?>
</p>
Do you want to insert more records? <a href="insertForm_admin.php">click here!</a> or <a href="pointex.html"> Go Back </a> to admin page.
</body>
</html>

