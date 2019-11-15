<?php
$car_id=$_POST['car'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="select * from cars where cid=$car_id";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Form</title>
<style type="text/css">

body{ 
	 background-image: url(audigreen.jpg); background-size: cover; }

.forms
{ 
  background-color:rgba(192,192,192,0.6);
  border:0px solid white;
  border-radius: 10px;
  padding: 50px 1%;
  margin: 20vh;
-webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

}
.container{
	margin-left: -6%;
	width: 100%;
	color: black;
}

th{
	font-size: 1.5em; font-weight: bold;
}
 input[type=text] {
  width: 100%;
  padding: 12px 20px;
  border-radius: 5px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
  background: #f1f1f1;
  margin-left: 30%;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
</head>
<body>
<h1 align="center" style="font-weight: bolder; font-size: 4em;  color: black; text-shadow: 5px 5px 7px #000000; " >UPDATE FORM</h1>
  <a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left: 190px; margin-top: -120px; position: absolute;"></a>
<center>
<form class="forms" action="updation2_admin.php" method="post" style="color: white; font-weight: bold">
<div class= "container">
<table>
	<?php
	for($i=1;$i<=$num;$i++)
     {
          $row=mysqli_fetch_array($result);
          ?>
     <input type="hidden" name="carid" value="<?php echo $row['cid']; ?>">
	<tr>
		<th>CAR NAME:</th>
		<td><input type="text" name="cname" value="<?php echo $row['cname']; ?>"></td>
	</tr>
	<tr>
		<th>CAR MODEL:</th>
		<td><input type="text" name="cmodel" value="<?php echo $row['model']; ?>"></td>
	</tr>
	<tr>
		<th>CAR BRAND:</th>
		<td><input type="text" name="cbrand" value="<?php echo $row['brand']; ?>"></td>
	</tr>
	<tr>
		<th>FUEL ECONOMY:</th>
		<td><input type="text" name="feco" value="<?php echo $row['fuel_economy']; ?>"></td>
	</tr>
	<tr>
		<th>CAR PRICE:</th>
		<td><input type="text" name="cprice" value="<?php echo $row['price']; ?>"></td>
	</tr>
	<tr>
		<th>CAR CATEGORY:</th>
		<td><input type="text" name="category" value="<?php echo $row['category']; ?>"></td>
	</tr>
	<tr>
		<th>SEAT CAPACITY:</th>
		<td><input type="text" name="capacity" value="<?php echo $row['seat_capacity']; ?>"></td>
	</tr>
	<tr>
		<th>CAR COLOR:</th>
		<td><input type="text" name="color" value="<?php echo $row['color']; ?>"></td>
	</tr>
	<tr>
		<th>FUEL TYPE:</th>
		<td><input type="text" name="fuel" value="<?php echo $row['fuel_type']; ?>"></td>
	</tr>
	
	<tr>
		<td><input type="submit"  value="UPDATE" style="font-size: 2.1em; font-weight: bolder; height: 40%; margin-left:220px; margin-top: 12%; width: 60%; background-color: rgba(3, 175, 75,0.8); padding: 2%; border: 2px solid #03af4b;" ></td>
	</tr> <?php } ?>
</table>
</div>
	
</form>
</center>

</body>
</html>