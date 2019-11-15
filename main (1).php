<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="icon" type="image/icon" href="fev.png"/>
	<link rel="stylesheet" type="text/css" href="about2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
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
    	width: 60%; height: 20%; margin-top: 7%; margin-left: 19%; background-color: grey; opacity: 0.6;
    	}
    	.b1{
    		width: 24%; height: 60px; margin-left: 250px; margin-top: 39%; opacity: 1.2;
    		background-color: black;  color: white; border: 5px solid black ; font-size: 1.4em;
    	}

    	.b2{
        width: 30%; height: 60px; margin-left: 370px; margin-top: 6%;  background-color: #750728; color:black; box-shadow: 5px 10px 20px #c60f68 inset; border: 3px solid #c60f68 ; font-size: 2em;
    	}
    .d1 img{ padding: 5px; width: 100%; height: 100%; box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); border-radius: 10px; }
        
    </style>
<body>
<?php include 'header.php';?>
<div id="main" style="height: 250vh;">
<div class="qw" style="height: 250vh; width:80%;margin-left: 135px;background-image: url(r1.jpg); background-size: cover; background-position: center">
	<img src="pointedpic.png" class="pic">	
        <h1 class="heading">CAR DETAILS</h1>
	<!--first div-->
	<div class="d1">
     <a href="#"><img src="rollsblue.jpg" name=""></a>
	</div>
	<!--first div close-->

		<!--second div-->
		<div class="d2">
		
		<button class="b1">
				<i class="fa fa-shopping-cart" style="margin-right: 10px" aria-hidden="true"></i>Order Now
			</button>
		</div>
				<!--second div close-->

			<!--Accessories Button-->
			<button class="b2">
				<i class="fa fa-car" style="margin-right: 10px;" aria-hidden="true"></i>Accessories
			</button>
</div>
</div>

<?php include 'footer.php';?>

<script src="https://use.fontawesome.com/4f49581711.js"></script>

</body>
</html>