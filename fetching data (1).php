

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function func(){
			alert("hey");
			var type=document.getElementByName("color");
			if (type[0].checked)
			{
				alert("human");
			}
			if (type[1].checked)
			{
				alert("robort");
			}
			if (type[2].checked)
			{
				alert("other");
			} 
		}
	</script>
</head>
<body>
<?php
$choice=$_POST['choice'];
if($choice=='color')
	echo "select your $choice";
elseif ($choice=='brand')
	echo "select your $choice";
elseif ($choice=='model')
	echo "select your $choice";
elseif ($choice=='fuel_type')
	echo "select your $choice";
elseif ($choice=='category')
	echo "select your $choice";
elseif ($choice=='seat_capacity')
	echo "select your $choice";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
?> 
<p> <?php 

$q="select distinct $choice from cars";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result); ?>

<form method="post" action="display.php">
	<button  name=" $choice " value=" $row[$choice]">  <?php echo $row[$choice]. " <br/>"; ?> </button> <?php
	   
        

}
?>  <?php
 mysqli_close($con);

?> </p>
</form>




</body>
</html>

