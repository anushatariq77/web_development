<?php

$cn=$_POST['carid']; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Order Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/1.5.1; width: 40%;.5.7; width: 40%;/css/bootstrap.min.css">
<link rel="icon" type="image/icon" href="fev.png"/>
<link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
<style type="text/css">
.forms
{ 
  background-color:rgba(192,192,192,0.4);
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
}
 input[type=text], input[type=email],input[type=date]{
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

<?php 
session_start();

if(isset($_SESSION['loggedIn'])){ ?>
<body style ="background-image: url(gray.jpg); background-size: cover; ">
 <h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000; margin-left: 40px;" >BOOK YOUR DESIRED CAR</h1>
  <a href="tree.php"><img src="bb (1).png" style="width: 100px; margin-left:80px; margin-top: -120px; position: absolute;"></a>

<form class="forms" action="order.php" method="post">
  <div class= "container">
  <h1 align="center" style="font-weight : bolder; font-size: 4em; margin-top: -5%; ">Order Form</h1>
<p align="center" style="font-size: 1.6em; font-weight: bold">Please fill in this form to insert new records of car.</p>
  <hr style="margin-left: 10%;">

    <label for="oname"  style="font-size: 1.3em; font-weight: bold; margin-left: 30%;" >Name</label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Name" name="oname" required></br>

    <label for="omail" style="font-size: 1.3em; font-weight: bold;margin-left: 30%"><b>Email Address</b></label></br>
    <input type="email" style="font-size: 1em; width: 40%;" placeholder="Enter Email" name="omail" required></br>

    <label for="ocontact" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Contact Number</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Contact Number" name="ocontact" required></br>

    <label for="odate" style="font-size: 1.3em; font-weight: bold; margin-left: 30%">Date</label></br>
    <input type="date" style="font-size: 1em; width: 40%;" name="odate" required></br>


    <input type="hidden" name="ocid" value="<?php echo $cn ?>" >

    <input type="submit"  value="ORDER" style="font-size: 1.5em; font-weight: bolder; height: 30%; margin-left: 35%; margin-top: 7%; width: 30%; background-color:rgba(0,0,0,0.8); 
    padding: 2%; border: 2px solid ; color: white;" >
</div>
  
</form>

</body>
</html> <?php
}
else{
	echo "you are not logged in"; ?> <br/> <p><a href="temp2.php">Click Here</a> to Login</p> <?php
}


?>