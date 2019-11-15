
<!DOCTYPE html>
<html>
<head>
	<title>Insertion Form</title>
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
<body style ="background-image: url(c12.jpg); background-size: cover; ">
 <h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000; margin-left: 40px;" >INSERT CAR RECORDS IN DATABASE</h1>
  <a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left:-10px; margin-top: -120px; position: absolute;"></a>

<form class="forms" action="insertion_admin.php" method="post">
	<div class= "container">
	<h1 align="center" style="font-weight : bolder; font-size: 4em; margin-top: -5%; ">Insertion Form</h1>
    <p align="center" style="font-size: 1.6em; font-weight: bold">Please fill in this form to insert new records of car.</p>
    <hr style="margin-left: 10%;">

    <!--<label for="cid"  style="font-size: 1.3em; font-weight: bold; margin-left: 30%" >Car Id</label></br>
    <input type="text" style="font-size: 	1em; width: 40%;" placeholder="Enter Car Id" name="cid" required></br> -->


    <label for="cname" style="font-size: 1.3em; font-weight: bold; margin-left: 30%" >Car Name</label></br>
    <input type="text" style="font-size: 	1em; width: 40%;" placeholder="Enter Car Name" name="cname" required></br></br>

    <label for="cmodel"  style="font-size: 1.3em; font-weight: bold; margin-left: 30%" >Car Model</label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Car Model" name="cmodel" required></br>

    <label for="cbrand" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Car Brand</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Car brand" name="cbrand" required></br>

    <label for="feco" style="font-size: 1.3em; font-weight: bold; margin-left: 30%">Fuel Economy</label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Fuel Economy" name="feco" required></br>

    <label for="cprice" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Car Price</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Car Price" name="cprice" required></br>

    <label for="category" style="font-size: 1.3em; font-weight: bold; margin-left: 30%">Car Category</label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Car Category" name="category" required></br>

    <label for="capacity" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Seat Capacity</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Seat Capacity" name="capacity" required></br>

    <label for="color" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Car Color</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Car Color" name="color" required></br>

    <label for="fuel" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Fuel Type</b></label></br>
    <input type="text" style="font-size: 1em; width: 40%;" placeholder="Enter Fuel Type" name="fuel" required></br>

    <label for="myfile" style="font-size: 1.3em; font-weight: bold; margin-left: 30%"><b>Car Image</b></label></br>
    <input type="file" style="font-size: 1.5em; width: 40%; margin-left: 30%;" name="myfile"></br>

    <input type="submit"  value="INSERT" style="font-size: 2.1em; font-weight: bolder; height: 40%; margin-left: 30%; margin-top: 7%; width: 40%; background-color:rgba(0, 64, 255,0.8); 
    padding: 2%; border: 2px solid #0040ff;" >
</div>
	
</form>

</body>
</html>