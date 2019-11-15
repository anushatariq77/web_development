<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Details</title>
	<link rel="icon" type="image/icon" href="fev.png"/>
	<link rel="stylesheet" type="text/css" href="car3.css">
	<link rel="stylesheet" type="text/css" href="about2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
<div id="main" style="height: 270vh;">
<div class="qw" style="height: 270vh; width:80%;margin-left: 135px;background-image: url(Roads-Image.jpg); background-size: cover; background-position: center;">
<h1 style="margin:50px; font-weight: bolder; text-shadow: grey 0 0 10px; text-align: center;font-size: 40px;">Car List</h1>
    	<h3 style="margin-left:50px; font-weight: bold; text-shadow: grey 0 0 10px; text-align: center;">You can choose your desired car..</h3>





<?php
$secondChoice=$_POST['c'];
 if ($secondChoice==500000 ||1000000 || 1500000 || 2000000 ||2500000 )
    showByPrice($secondChoice);





 
function showByPrice($x){ 
         
                $con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where price >='$x' ";
                $result2=mysqli_query($con,$q);
                $num2=mysqli_num_rows($result2);
                for($i=1;$i<=5;$i++)
                {
                    $row=mysqli_fetch_array($result2);
                    ?> <div class="maint" style="width: 750px;  margin:80px; margin-left: 170px;  box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); border-radius: 10px;background-color: rgba(0, 0, 0,0.8);">
<a href="#"><img src=" <?php  echo $row['image'];  ?>" name="" style="padding: 5px; width: 270px; height: 186px; box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); border-radius: 10px; "></a>
<div style="width: 360px; height: 180px; color: white; margin-left: 320px; padding: 10px; margin-top: -180px;  position: absolute;">
    <p style="margin-left: 15px; font-size: 18px; text-shadow: grey 0 0 10px;color: white;"><b>CAR NAME: <?php echo $row['cname'] ?> </b></p>
        <p style="margin-top: -10px; margin-left: 15px; font-size: 15px; color: white; text-decoration:underline; margin-top: 10px;">CAR MODEL: <?php echo $row['model']; ?><br> PRICE: <?php echo $row['price']; ?> </p>
        <form action="main3.php" method="post"><button class="but" name="car" value="<?php echo $row['cid']; ?>" style=" width:100px; background-color:<?php echo $row['color']; ?> ; opacity: 0.6; border:15px solid <?php echo $row['color']; ?>; margin: 280px; margin-top: -6px; position: absolute;color:white;font-weight: bolder;">Details</button> </form>
       </div>
     </div>
                     <?php
                }
               
                mysqli_close($con); 
            }
?>

</div>
</div>


    	

<?php include 'footer.php';?>

<script src="https://use.fontawesome.com/4f49581711.js"></script>
</body>
</html>