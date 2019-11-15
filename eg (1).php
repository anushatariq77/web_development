<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Auto4x</title>
	<link rel="icon" type="image/icon" href="fev.png"/>
	<link rel="stylesheet" type="text/css" href="car3.css">
	<link rel="stylesheet" type="text/css" href="fade.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>	   
<div id="main">
  <div id="container">
	<img class="slides" src="slide-1.jpg">
	<div class="text-block" id="textDiv0" >
            <h1 style="margin: 30px;font-weight: bolder; font-size: 40px;">FORD</h1>
            <h4 style="margin: 30px;font-weight: bold; font-size: 30px;">Mondeo Fusion</h4>
            <p style="margin: 30px;font-weight: bold; ">It was successful not only because it provided inexpensive transportation on a massive scale, but also because the car signified innovation for the rising middle class and became a powerful symbol of age of modernization.</p>
        </div>
	<img class="slides" src="slide-2.jpg">
	<div class="text-block" id="textDiv1">
            <h1 style="margin: 30px;font-weight: bolder; font-size: 40px;">HONDA HSC</h1>
            <h4 style="margin: 30px;font-weight: bold; font-size: 30px;">Civic</h4>
            <p style="margin: 30px;font-weight: bold; "> Elegance, style, sportiness and performance with a long and glorious heritage. Maserati, a tradition of innovation.Explore the beautiful range of Maserati models. Customize your own Maserati and find out more about price, performances and features.</p>
        </div>
	<img class="slides" src="slide-3.jpg">
	 <div class="text-block" id="textDiv2">
            <h1 style="margin: 30px;font-weight: bolder; font-size: 40px;" >MASERATI GT</h1>
            <h4 style="margin: 30px;font-weight: bold; font-size: 30px;">3500 GT</h4>
            <p style="margin: 30px;font-weight: bold; "> Experience Honda like never before with all new Honda HSC. New sleek design, better compatibility, more space, better performance. Choose the best among what you got and let your ride define yourself.</p>
        </div>
	<button class="btn" id="btn1" onclick="plusIndex(-1)">&#10094;</button>
	<button class="btn" id="btn2" onclick="plusIndex(1)">&#10095;</button>
</div>
<div class="side-block" id="sideDiv">
	<h1 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;font-size: 35px;padding: 3px;">We Provide You..</h1>
	<img src="shadow.png" style="margin: 20px auto; width: 200px;">
            <img src="toyo.jpg" style="width: 80%;margin:20px 20px;">
            <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">TOYOTA</h3>
            <p style="text-align: center; padding: 5px;">Toyota, is a Japanese multinational automotive manufacturer headquartered in Toyota, Aichi, Japan.As of October 2017,Toyota the fifth-largest company in the world by revenue.</p>
             <img src="shadow.png" style="margin: 20px auto; width: 200px;">
              <img src="nissan.jpg" style="width: 80%;margin: 20px;">
             <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">NISSAN</h3>
            <p style="text-align: center; padding: 5px;">Nissan is a Japanese multinational automobile manufacturer headquartered in Nishi-ku, Yokohama. The company sells its cars under the Nissan, Infiniti, and Datsun brands.</p>
             <img src="shadow.png" style="margin: 20px auto; width: 200px;">
              <img src="audi.png" style="width: 80%;margin: 20px;">
             <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">AUDI</h3>
            <p style="text-align: center;padding: 5px;">Audi AG is a German automobile manufacturer that designs, engineers, produces and markets luxury vehicles. Audi is a member of the Volkswagen Group and has its roots at Ingolstadt, Bavaria and Germany.</p>
        </div>
  
  <div class="side-block2" id="sideDiv2">
	<h1 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;font-size: 35px;padding: 3px;">We Provide You..</h1>
	<img src="shadow.png" style="margin: 20px auto; width: 200px;">
            <img src="mer2.png" style="width: 80%;margin:20px 20px;">
            <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">MERCEDES</h3>
            <p style="text-align: center; padding: 5px;">Mercedes is a global automobile marque and a division of the German company Daimler AG. The brand is known for luxury vehicles, buses, coaches, and lorries. The headquarters is in Stuttgart, Baden-Württemberg.</p>
             <img src="shadow.png" style="margin: 20px auto; width: 200px;">
              <img src="bm.png" style="width: 80%;margin: 20px;">
             <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">BMW</h3>
          <p style="text-align: center;padding: 5px;">BMW is a German multinational company which currently produces luxury automobiles and motorcycles, and also produced aircraft engines until 1945.</p>
             <img src="shadow.png" style="margin: 20px auto; width: 200px;">
              <img src="rolls royce.jpg" style="width: 80%;margin: 20px;">
             <h3 style="text-align: center;font-weight: bolder; text-shadow: white 0 0 10px;">ROLLS ROYCE</h3>
            <p style="text-align: center;padding: 5px;">Rolls-Royce was a British luxury car and later an aero engine manufacturing business established in 1904 by the partnership of Charles Rolls and Henry Royce.</p>
        </div>

<div class="rel">
   <h1 style="text-align: center; padding-top: 20px;text-shadow: grey 0 0 10px;"><strong>Find The Best</strong> Car For You. </h1>
   <p style="text-align: center;font-size: 20px;">We have thousands of cars for you to choose.</p>
<div class="start">
<!--FIRST DIV OF 2ND SLIDESHOW-->
<div class="row">
	
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c4.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2001</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>
	<p style="margin:7px;font-size: 20px;"><b>Maclaren , P1</b></p>
	<p style="margin:7px;color: grey;">A stylish performer that embodies sophistication and intelligence.</p>
</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c10.jpg">
	<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2012</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">4seats</li>
     </ul>
		</nav>
    <p style="margin:7px;font-size: 20px;"><b>Rover , 75</b></p>
	<p style="margin:7px;color: grey;">Distinctive styling, class-leading safety and trailblazing technology.</p>

</div>
</div>
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c3.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> Petrol</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2001</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">4seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Rolls Royce , Dawn</b></p>
	<p style="margin:7px;color: grey;">An alluring silhouette, with the performance and amenities to match.</p>

</div>
</div>

		<div class="col-sm-3">
<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c2.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> Petrol</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2015</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Porche , 911</b></p>
	<p style="margin:7px;color: grey;">A stylish performer that embodies sophistication and intelligence</p>

</div>
</div>
</div>
<!--FIRST DIV OF 2ND SLIDESHOW CLOSED-->

<!--SECOND DIV OF 2ND SLIDESHOW-->
<div class="row">
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c36.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2001</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Hyundai Santa Fe</b></p>
	<p style="margin:7px;color: grey;">With its striking style Santa Fe should be on family car hitlist. </p>
</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c38.jpg">
	<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2010</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>
    <p style="margin:7px;font-size: 20px;"><b>BMW , M4</b></p>
	<p style="margin:7px;color: grey;">The m4 is a chic all-electric supermini with a therotical range of 400 kilometres.</p>

</div>
</div>
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c39.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> Petrol</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2006</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">4seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Ferrari , 448</b></p>
	<p style="margin:7px;color: grey;">Ferrari 488 GTB has extreme power and superb comfort provides a unique experience.</p>

</div>
</div>


		<div class="col-sm-3">
<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c28.gif">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2014</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">6seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Nissan , Ireland</b></p>
	<p style="margin:7px;color: grey;">The Renault Clio is a good-looking supermini with an enjoyable driving style.</p>

</div>
</div>
</div>
<!--SECOND DIV OF 2ND SLIDESHOW CLOSED-->


<!--THIRD DIV OF 2ND SLIDESHOW -->
<div class="row">
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c40.jpg">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 2px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2002</li>
				<li style="display: inline-block;color: white;margin: 2px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">6seats</li>
     </ul>
		</nav>
	<p style="margin:7px;font-size: 20px;"><b>Renault , Megane</b></p>
	<p style="margin:7px;color: grey;">The Megane is an elegantly designed family hatchback with a classy interior. </p>
</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c29.gif">
	<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> Petrol</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2011</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>
    <p style="margin:7px;font-size: 20px;"><b>Land Cruiser , 200</b></p>
	<p style="margin:7px;color: grey;">The Land Cruiser is a superb looking five-seater MPV with a spacious interior.</p>

</div>
</div>
	<div class="col-sm-3">
	<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c30.gif">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> Petrol</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2008</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">6seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Hyundai, Sonata</b></p>
	<p style="margin:7px;color: grey;">The all-electric Sonata will turn more heads than any car, eco friendly.</p>

</div>
</div>

		<div class="col-sm-3">
<div class="thumbnail" style="box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75); ">
	<img class="img" src="c31.gif">
		<nav style="opacity: 0.6;
	height: 30px;
	background-color:black;
	box-shadow: 0px 0px 4px 2px rgba(0,0,0,4);
	padding: 0 10px;
	position: relative;">
	 <ul>				
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-car" aria-hidden="true" style="color: white;"></i> CNG</li>
				<li style="display: inline-block;color: white;margin: 1px;"><i class="fa fa-calendar" aria-hidden="true" style="color: white;"></i> 2016</li>
				<li style="display: inline-block;color: white;margin: 1px;"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: white;">5seats</li>
     </ul>
		</nav>

	<p style="margin:7px;font-size: 20px;"><b>Audi , S3</b></p>
	<p style="margin:7px;color: grey;">Audi appear to have created a desirable people carrier with their new S3.</p>

</div>
</div>
</div>
<!--3rd div of 2nd slideshow closed-->

<button class="btn" onclick="plusqwert(-1)" id="btn3" style="position:absolute; margin-left: 0px; margin-top: 150px;color: white;background-color: black;
	font-size: 20px; opacity: 0.6;">&#10094;</button>
<button class="btn" onclick="plusqwert(1)" id="btn4" style=" position:absolute; margin-left: 96.2%; margin-top: 150px;color: white;background-color: black;
	font-size: 20px; opacity: 0.6;" >&#10095;</button>
</div>
</div>

 <div class="ref">
	<img class="img1" src="newsletter.jpg">
	<img class="img2" src="border.png">
	<p id="para" style="color:white; margin-top:-210px; margin-left: 45px; padding: 10px;letter-spacing: 1px;position: relative;float: left;opacity: 0.8;"><strong style="font-size: 20px;">Auto4x</strong> is a leading two-sided digital automotive marketplace<br> that creates meaningful connections between buyers and sellers.<br>The company empowers consumers with resources and information <br>to make informed buying decisions around the globe Product, Price, <br>Place and Person, by connecting advertising partners with in-market <br>car shoppers and providing data-driven intelligence to increase <br>inventory turn and gain market share.</p> 
	<hr style="position: absolute ; width:37% ; left: 10%; bottom: 30%; color: black;">
	<p style="position: absolute; bottom: 19%; left: 12%; font-size: 20px; color: white;text-shadow: white 0 0 10px; font-weight: bold; letter-spacing: 1px;">VISIT US:</p>
	<a href="https://www.facebook.com" target="_blank"><i id="icon" class="fa fa-facebook-official " aria-hidden="true" style="position: absolute; left:25%; bottom: 21%;  color: grey; font-size: 2.5em;"></i></a>
	<a href="https://www.instagram.com" target="_blank"><i id="icon" class="fa fa-instagram" aria-hidden="true" style="position: absolute; left:30%; bottom: 21%;  color: grey; font-size: 2.5em;"></i></a>
		<a href="https://www.twitter.com" target="_blank"><i id="icon" class="fa fa-twitter" aria-hidden="true" style="position: absolute; left:35%; bottom: 21%;  color: grey; font-size: 2.5em;"></i></a>
	<a href="https://www.gmail.com" target="_blank"><i id="icon" class="fa fa-envelope" aria-hidden="true" style="position: absolute; left:40%; bottom: 21%;  color: grey; font-size: 2.5em;"></i></a>
</div>
</div>

<?php include 'footer.php';?> 
       <script src="car3.js" type="text/javascript"></script>
       <script src="proj.js" type="text/javascript"></script>
       <script src="https://use.fontawesome.com/69b47e4610.js"></script>
</body>
</html>




