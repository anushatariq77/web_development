<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="car3.css">
</head>
<body>

<header>
	 <nav class="sign">
		<img class="logo" src="Capture.png">
			<ul style="margin-left: 900px; margin-top: -100px;">		
				<li class="bounce"><button><a href="temp2.php"><i class="fa fa-sign-in" aria-hidden="true" style="color: black; font-size: 30px; position: absolute; margin-top: 10px; margin-left: -12px; "></i></a></button></li>
			
				<li class="bounce"><button><a href="temp.php"><i class="fa fa-user-plus" aria-hidden="true" style="color: black; font-size: 30px; position: absolute; margin-top:10px; margin-left: -12px;"></i></a></button></li>

				<li class="bounce"><button><a href="admin2.php"><i class="fa fa-lock" aria-hidden="true" style="color: black; font-size: 30px; position: absolute; margin-top:10px; margin-left: -12px;"></i></a></button></li>
				
<?php				
if(isset($_SESSION['loggedIn'])){  ?>

<li class="bounce"><button><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true" style="color: black; font-size: 30px; position: absolute; margin-top:10px; margin-left: -12px;"></i></a></button></li> 
<?php } ?>
</ul>
		</nav>
		
	 <nav class="col">
	 <ul style=" margin-left: 200px;">
				<img src="li.jpg" style="margin-top: -3px;">	
				<li><span class="glyphicon glyphicon-home" aria-hidden="true" style="color: black; font-size: 1.5em;"></span><a href="eg.php"  style="font-weight: bolder; font-size:16px;">Home</a></li>
				<img src="li.jpg" style="margin-top: -3px;">
				<li><span class="glyphicon glyphicon-question-sign" aria-hidden="true" style="color: black; font-size: 1.5em;"></span><a href="about.php"  style="font-weight: bolder; font-size:16px;">About</a></li>
				<img src="li.jpg" style="margin-top: -3px;">
				<li><span class="glyphicon glyphicon-wrench" aria-hidden="true" style="color: black; font-size: 1.5em;"></span><a href="maintenance.php"  style="font-weight: bolder; font-size:16px;">Maintenance</a></li>
				<img src="li.jpg" style="margin-top: -3px;">
			    <li><i class="fa fa-list-alt" aria-hidden="true" style="color: black; font-size: 1.5em;"></i><a href="tree.php"  style="font-weight: bolder; font-size:16px;">Car Listing</a></li>
			    <img src="li.jpg" style="margin-top: -3px;">
			    <li><i class="fa fa-phone" aria-hidden="true" style="color: black; font-size: 1.5em;"></i><a href="contact1.php"  style="font-weight: bolder; font-size:16px;">Contact Us</a></li>
                <img src="li.jpg" style="margin-top: -3px;">
			</ul>
	 </nav>
  </header>
  
  </body>
</html>