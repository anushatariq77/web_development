<!DOCTYPE html>
<html>
<head>
	<title>Car Listing</title>
	<link rel="icon" type="image/ico" href="my.png"/>
	<link rel="stylesheet" type="text/css" href="car3.css">
	<link rel="stylesheet" type="text/css" href="about2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Ubuntu:400,700" rel="stylesheet">
    <style>

.img {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

img:hover {opacity: 0.7;}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

.cap{
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}


.modal-content, .cap {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

.clo {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.clo:hover,
.clo:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

</style>
</head>
<body>
<?php include 'header.php';?>
<div id="main" style="height: 110vh;">
<div class="red">
<div class="qw" style=" height: 110vh; width: 25%; margin-left:40px; background-color: #32343a;" >
    <h1 style="margin: 25px;font-weight: bolder;color: white;letter-spacing: 1px;  text-shadow: white 0 0 10px;">Advanced Search</h1>
    <h3 style="margin: 25px;font-weight: bolder;color: white;letter-spacing: 1px;  text-shadow: white 0 0 10px;">Search By Color</h3>
    <div>
        <div style="margin-left:20px; height: 30px;width: 30px;background-color: red; display: inline-block;"></div>
        <div style=" margin-left:20px;height: 30px;width: 30px;background-color: blue; display: inline-block;"></div>
        <div style="margin-left:20px;height: 30px;width: 30px;background-color: green; display: inline-block;"></div>
        <div style="margin-left:20px; height: 30px;width: 30px;background-color: purple; display: inline-block;"></div>
        <div style="margin-left:20px; height: 30px;width: 30px;background-color: dodgerblue; display: inline-block;"></div>
    </div>
</div>

<div class="as" style=" height: 110vh; width:69%; margin-left: 375px; background-color: #d9dbe0;">
	<h1>Gallery</h1>
	<h3>We offer the cars</h3>
    	
    <img id="myImg" src="car1.jpg" alt="Snow" name="myModal" style="width:80%;max-width:300px;" onclick="mod(this);">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01" src="car1.jpg">
  <div id="caption"> </div>
</div>


</div>
</div>
</div>

<?php include 'footer.php';?>
<script src="https://use.fontawesome.com/4f49581711.js"></script>
<script type="text/javascript">



function mod(img){
    var modal = document.getElementById(img.name);
    modal.style.display = "block";

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}


}



</script>
</body>
</html>