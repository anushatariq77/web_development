<?php

$size=sizeof($_POST);
$j=1;
for($i=1;$i<=size;$i++,$j++){
$index="b".$j;
if(isset($_POST[$index]))
 $c_id[$i]=$_POST[$index];
else
	$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
for($k=1;$k<=$size;$k++)
{
	$q="delete from cars where cid=".$c_id[$k];
	mysqli_query($con,$q);
}
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>deletion</title>
</head>
<body>
<h1>CARS RECORD MANAGEMENT</h1>
<p>
	<?php

   echo "Selected Record(s) deleted";

	?>
</p>
Go back to home page <a href="pointex.html">click here!</a>
</body>
</html>