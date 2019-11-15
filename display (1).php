<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
	<style type="text/css">
	body{
		background: url(bck.jpg);
	}
		#item{
			font-family: 'Ubuntu', sans-serif;
			margin-left: 15%;
			margin-right: 15%;
			background-color: #b0b4ba;
		}
		#i{
			padding-top: 5%;
			 
		}
		#content{ line-height: 0.8;
			margin-left: 30%;
			padding: 20px;
			text-align: left;
		}
		#button{
			margin-left: 30px;
		}
	</style>
</head>
<body>

</body>
</html>

<?php
$secondChoice=$_POST['c'];
if ($secondChoice=='red' || 'grey' || 'black' || 'white' || 'purple' || 'blue' )
    showByColor($secondChoice);
if ($secondChoice== 'toyota' || 'honda' || 'suzuki' || 'daihatsu')
	showByBrand($secondChoice);
if($secondChoice== 2008 || 2016 || 2017 || 2014 || 2010 || 2012)
	showByModel($secondChoice);
if($secondChoice=='sedan' || 'hatchback' || 'wagon')
	showByCategory($secondChoice);
if($secondChoice=='petrol' || 'cng')
	showByFuel($secondChoice);
if($secondChoice== 5 || 4)
	showByCapacity($secondChoice);

function showByColor($x){ 
         
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where color='$x' ";
                $result=mysqli_query($con,$q);
                $num=mysqli_num_rows($result);
                for($i=1;$i<=$num;$i++)
                {
                	$row=mysqli_fetch_array($result);
                	?> <br/> <center> <div id="item"> 
                		<div id="i"><img width="50%" height="50%" src=" <?php  echo $row['image'];  ?>"></div> <div id="content"> <ul>

                	 <?php 
                	echo "<li> Car id: ". $row['cid']."</li></br> <li>  brand: " . $row['brand']. "</li> </br> <li>car name: ". $row['cname'] . "</li>  </br><li> model: " . $row['model']. "</li></br><li> fuel economy: " . $row['fuel_economy']. "</li> </br> <li> price: " . $row['price']. " </li></br><li> category: " . $row['category']. " </li></br><li> seats: " . $row['seat_capacity']. " </li></br> <li>fuel type: " . $row['fuel_type']. "</li></br><li> color: " . $row['color']."</li>  "; ?></ul><button id="button">PURCHASE</button>  </div></div></center> </br> </br> </br>
                	 <?php
                }
               
                mysqli_close($con); 
            }
 function showByBrand($x){ 
         
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where brand='$x' ";
                $result=mysqli_query($con,$q);
                 $num=mysqli_num_rows($result);
                for($i=1;$i<=$num;$i++)
                {
                	$row=mysqli_fetch_array($result);
                	echo " </br> Car id: ". $row['cid']. " </br> brand: " . $row['brand']. " </br> car name: ". $row['cname'] . " </br> model: " . $row['model']. "</br> fuel economy: " . $row['fuel_economy']. " </br> price: " . $row['price']. " </br> category: " . $row['category']. " </br> seats: " . $row['seat_capacity']. " </br> image: " . $row['image']. "</br> fuel type: " . $row['fuel_type']. "</br> color: " . $row['color']." </br> </br> </br> ";
                } 
                mysqli_close($con); 
            }
function showByModel($x){ 
         
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where model='$x' ";
                $result=mysqli_query($con,$q);
                 $num=mysqli_num_rows($result); 
                for($i=1;$i<=$num;$i++)
                {
                	$row=mysqli_fetch_array($result);
                	echo " </br> Car id: ". $row['cid']. " </br> brand: " . $row['brand']. " </br> car name: ". $row['cname'] . " </br> model: " . $row['model']. "</br> fuel economy: " . $row['fuel_economy']. " </br> price: " . $row['price']. " </br> category: " . $row['category']. " </br> seats: " . $row['seat_capacity']. " </br> image: " . $row['image']. "</br> fuel type: " . $row['fuel_type']. "</br> color: " . $row['color']." </br> </br> </br> ";
                }
                mysqli_close($con); 
            }
function showByFuel($x){ 
        
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where fuel_type='$x' ";
                $result=mysqli_query($con,$q);
                 $num=mysqli_num_rows($result);
                for($i=1;$i<=$num;$i++)
                {
                	$row=mysqli_fetch_array($result);
                	echo " </br> Car id: ". $row['cid']. " </br> brand: " . $row['brand']. " </br> car name: ". $row['cname'] . " </br> model: " . $row['model']. "</br> fuel economy: " . $row['fuel_economy']. " </br> price: " . $row['price']. " </br> category: " . $row['category']. " </br> seats: " . $row['seat_capacity']. " </br> image: " . $row['image']. "</br> fuel type: " . $row['fuel_type']. "</br> color: " . $row['color']." </br> </br> </br> ";
                }
                mysqli_close($con); 
            }
function showByCategory($x){ 
         
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where category='$x' ";
                $result=mysqli_query($con,$q);
                 $num=mysqli_num_rows($result); 
                for($i=1;$i<=$num;$i++)
                {
                	$row=mysqli_fetch_array($result);
                	echo " </br> Car id: ". $row['cid']. " </br> brand: " . $row['brand']. " </br> car name: ". $row['cname'] . " </br> model: " . $row['model']. "</br> fuel economy: " . $row['fuel_economy']. " </br> price: " . $row['price']. " </br> category: " . $row['category']. " </br> seats: " . $row['seat_capacity']. " </br> image: " . $row['image']. "</br> fuel type: " . $row['fuel_type']. "</br> color: " . $row['color']." </br> </br> </br> ";
                } 
                mysqli_close($con); 
            }

 function showByCapacity($x){ 
         
            	$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where seat_capacity='$x' ";
                $result=mysqli_query($con,$q);
                $num=mysqli_num_rows($result);
               
                for($i=1;$i<=$num;$i++)
                {   
                	$row=mysqli_fetch_array($result);
                	echo " </br> Car id: ". $row['cid']. " </br> brand: " . $row['brand']. " </br> car name: ". $row['cname'] . " </br> model: " . $row['model']. "</br> fuel economy: " . $row['fuel_economy']. " </br> price: " . $row['price']. " </br> category: " . $row['category']. " </br> seats: " . $row['seat_capacity']. " </br> image: " . $row['image']. "</br> fuel type: " . $row['fuel_type']. "</br> color: " . $row['color']." </br> </br> </br> ";
                } 
                mysqli_close($con); 
            }
 



?>