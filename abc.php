<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="icon" type="image/icon" href="fev.png"/>
    <link rel="stylesheet" type="text/css" href="about2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">

	 <style type="text/css">
        
   .pic{
            margin-top: 2%;
            width: 70%;
            height: 9%;
        }
    .pic1{
            width: 60%;
            height: 7%;
            margin-top: -20%;

        }
    .heading{
        margin-top: -10%; margin-left:15%; color: black; font-size: 4em;   text-shadow: 0 0 3px #ba1066; font-weight: bold;
       }
        
    .d1{
    width: 50%; height: 20%; margin-top: 8%; margin-left: 24%;box-shadow:  -1px 4px 26px 5px rgba(0,0,0,0.75); 
        }

    .d2{
        width: 60%; height: 36%; margin-top: 7%; margin-left: 19%; background-color: rgba(128, 128, 128,0.6); font-weight: bolder; 
        }
    .b1{
            width: 24%; height: 60px; margin-left: 250px; margin-top: 10%; opacity: 1.2;
            background-color: black;  color: white; border: 5px solid black ; font-size: 1.4em;
        }

        .b2{
        width: 30%; height: 60px; margin-left: 370px; margin-top: 5%;  background-color: #750728; color:black; box-shadow: 5px 10px 20px #c60f68 inset; border: 3px solid #c60f68 ; font-size: 2em;
        }
    .d1 img{ padding: 5px; width: 100%; height: 100%; box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); border-radius: 10px; }
        
    </style>
</head>
<body>

<?php include 'header.php';?>
<div id="main" style="height: 250vh;">
<div class="qw" style="height: 250vh; width:80%;margin-left: 135px;background-image: url(r1.jpg); background-size: cover; background-position: center">
    <img src="pointedpic.png" class="pic">  
        <h1 class="heading">CAR DETAILS</h1>
    <!--first div-->
    <div class="d1">
    	<?php
$carid=$_POST['car'];
                $con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from cars where cid='$carid' ";
                $result2=mysqli_query($con,$q);
                $num2=mysqli_num_rows($result2);
                for($i=1;$i<=$num2;$i++)
                {
                    $row=mysqli_fetch_array($result2);
                    ?>

     <a href="#"><img src="<?php  echo $row['image'];  ?>" name=""></a>
    </div> 
    <!--first div close-->

        <!--second div-->
        <div class="d2">
        <center>
         <ul style="margin-left: 15px; font-size: 30px; text-shadow: grey 0 0 10px; color: black;padding-top: 35px;">
         	 <li>CAR NAME:<?php  echo $row['cname'];  ?></li>
             <li>CAR MODEL:<?php  echo $row['model'];  ?></li>
             <li>CAR BRAND: <?php  echo $row['brand'];  ?></li>
             <li>CAR COLOR: <?php  echo $row['color'];  ?></li>
             <li>FUEL CAPACITY:<?php  echo $row['fuel_economy'];  ?> </li>
             <li>PRICE: <?php  echo $row['price'];  ?></li>
             <li>CATEGORY: <?php  echo $row['category'];  ?></li>
             <li>SEAT CAPACITY: <?php  echo $row['seat_capacity'];  ?></li>
             <li>FUEL TYPE: <?php  echo $row['fuel_type'];  ?></li>   <?php } ?>
         </ul>
</center>

       
        </div> 

                <!--second div close-->
                
      <!--Accessories Button-->
       <!-- <form action="accessories.php" method="post">
            <button name="ci" value="  " class="b2">
            <i class="fa fa-car" style="margin-right: 10px;" aria-hidden="true"></i>Accessories
            </button>
      
Accessories Button-->

<a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left: 30px; margin-top: 240px; position: absolute;"></a>


</div>
</div>
<?php include 'footer.php';?>
<script src="https://use.fontawesome.com/4f49581711.js"></script>

</body>
</html>