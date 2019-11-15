<?php 
session_start();
$carselected=$_POST['cid'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="select a_name from accessories inner join junction inner join cars where cars.cid=junction.car_id and accessories.a_id=junction.acc_id and cars.cid=$carselected";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$status=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Accessories</title>
	<style type="text/css">
 		#table{
 			
 			width: 80%;
 		}
 		#table tr{
 			background: lightblue;
 		}
 	</style>
</head>
<body style="background-image: url(i.jpg); background-size: cover; background-position: center; ">

<h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000; " >ACCESSORIES</h1>
  <a href="tree.php"><img src="bb (1).png" style="width: 100px; margin-left: 190px; margin-top: -120px; position: absolute;"></a>
	
 <table id="table">

 	<tr>
 		<th>Accesories</th>
 	</tr>
 	<?php

     for($i=1;$i<=$num;$i++)
     {
     	$row=mysqli_fetch_array($result);
     	?>
     	<tr>
     		<td><?php echo $row['a_name']; ?></td>
     	</tr> <?php }

 	?>

</body>
</html>