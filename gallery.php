<!DOCTYPE html>
<html>
<head>
<title>Car Listing</title>
<link rel="icon" type="image/icon" href="fev.png"/>
<link rel="stylesheet" type="text/css" href="about2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style type="text/css">
#myImg{
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    height: 100%;
    box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75);
}

.modal {
    display: none; 
    z-index: 1; 
    padding-top: 100px;
    overflow: auto; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgba(0,0,0,0.9); 
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

.modal-content {    
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

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

 .contain {
  position: relative;
  height: 50%;
  width: 30%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  border-radius: 10px;
  background-color: rgba(50, 52, 58,0.6);
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: 3s ease;
}

.contain:hover .overlay {
  bottom: 0;
  border-radius: 10px;
  height: 100%;
}

.tex {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}</style>
</head>
<body>
<?php include 'header.php';?>
<div id="main" style="height: 160vh;">
<div class="red">
<div class="qw" style=" height: 160vh; width: 25%; margin-left:40px; background-color: #32343a;">
  <h1 style="margin: 25px;font-weight: bolder;color: white;letter-spacing: 1px;  text-shadow: white 0 0 10px;">Advanced Search</h1>
  
  <div style="border: 2px solid white; background-color: #afafaf;   width:90%; height: 250px; margin-left: 15px;margin-top: 10%;">
    <h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;">Search By Color</h1>
  <div class="initial1">
    <div class="brand" style="background-color: #afafaf; width: 100%; position: absolute;margin-top: 40px;">
<a href="details.php"><img src="boxr.png" style="width:50px; height: 50px; margin-left: 43px; position: absolute;;"></a>
   <a href="#"> <img src="boxw.png" style="width:50px; height: 50px; margin-left:  123px;position: absolute;"></a>
    <a href="#"><img src="boxy.png" style="width:50px; height: 50px; margin-left: 203px;  position: absolute;"></a>
  </div> 

     <div class="brand" style="background-color: white; width: 100%; position: absolute;margin-top: 40px;">
     	<a href="#"><img src="boxp.png" style="width:50px; height: 50px;margin-left: 43px;position: absolute;"></a>
   <a href="#"><img src="boxb.png" style="width:50px; height: 50px; margin-left: 123px; position: absolute;"></a>
    <a href="#"><img src="boxbl.png" style="width:50px; height: 50px; margin-left: 203px; position: absolute;"></a>
     </div>
     <div class="brand" style="background-color: white; width: 100%;position: absolute;margin-top: 40px;">
     	<a href="#"><img src="boxm.png" style="width:50px; height: 50px;margin-left: 43px; position: absolute;"></a>
   <a href="#"><img src="boxgr.png" style="width:50px; height: 50px; margin-left: 123px; ; position: absolute;"></a>
    <a href="#"><img src="boxg.png" style="width:50px; height: 50px; margin-left: 203px; position: absolute;"></a>
     </div>
<span class="btn" onclick="plusy(-1)" id="btn1" style="position: absolute;margin-top: 40px;color: black; font-size: 30px; margin-left: 0px;">&#10094;</span>
	<span class="btn" onclick="plusy(1)" id="btn2" style="position: absolute;margin-top: 40px; margin-left: 260px;color: black;font-size: 30px;">&#10095;</span>
</div>
</div>

 <div style="border: 2px solid white; background-color: #afafaf;width:90%; height: 290px; margin-left: 15px; margin-top: 10%;">
<h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;text-align: center;">Search By Brands</h1>
<div class="initial">
 	<div class="brands" style="width:100%; height:200px; margin-top: 20px;">
 	<img src="bg.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
 	<img src="li.jpg" style="margin-top: 10px; ">
 	<img src="nis.png" style="width:90px; height: 90px; margin-top:20px;margin-left:3px; ">
 	<img src="li.jpg" style="margin-top: 10px">
 	<img src="ho.png" style="width:90px; height: 90px; margin-top:20px;margin-left:3px;">
</div>

<div class="brands" style="width:100%; height:200px; margin-top: 20px;">
    <img src="try.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
    <img src="li.jpg" style="margin-top: 10px;">
    <img src="au.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
    <img src="li.jpg" style="margin-top: 8px;">
    <img src="maruti-suzuki.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
</div>

    <div class="brands" style="width:100%; height:200px; margin-top:20px;">
    <img src="rol2.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px; ">
    <img src="li.jpg" style="margin-top: 8px;">
    <img src="ch.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
    <img src="li.jpg" style="margin-top: 23px; margin-left: 15px; position: absolute;">
    <img src="tg.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: 3px;">
</div>
</div>

</div>
  <div style="border: 2px solid white; background-color: #afafaf;width:90%; height: 320px; margin-left: 15px; margin-top: 10%;">
    <h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;">Search By Price</h1>
    <span style=" background-color:black ; opacity: 0.6; border:15px solid black; margin-top:30px; letter-spacing: 1px; margin-left: 12px; padding: 2px; border-radius: 50%;  color:white; font-weight: bolder; position: absolute;">Above 5 lac</span></a>
    <span style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top:30px; letter-spacing: 1px; margin-left: 165px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 10 lac</span></a>
    <span style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black;  letter-spacing: 1px; margin-top:90px; margin-left: 28px; padding: 2px; color:white; font-weight: bolder;  position: absolute;">Above 15 lac</span></a>
    <span style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top:90px; letter-spacing: 1px; margin-left: 152px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 20 lac</span></a>
    <span style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top: 145px; letter-spacing: 1px; margin-left: 90px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 25 lac</span></a>
</div>
</div>

<div class="as" style=" height: 160vh; width:69%; margin-left: 375px; background-color: #d9dbe0;">
<div class="gallery" style="width: 70%;height: 8%; margin-top: 30px; border-radius: 20%; margin-left:15%;background-color: rgba(50, 52, 58,0.4);">
<h1 style="color: black; text-shadow: 3px 3px white; font-size: 4em; margin-left: 170px; font-weight: bolder; margin-top: 13px; position: absolute"><i>SHOWROOM</i></h1></div>

<div class="sam">		
<div class="contain" style="margin-top: 90px; margin-left: 40px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img01" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top:20px;  margin-left: 40px; ">
<img id="myImg" src="car1.jpg" alt="car" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img02" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style="margin-left: 40px; margin-top:20px; ">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img03" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style="margin-left: 40px; margin-top:20px; ">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img04" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>


<div class="contain" style=" margin-top: -756px; margin-left: 330px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img05" src="car1.jpg"\>
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left: 330px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal"  onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img06" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left:330px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img07" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>

</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left: 330px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img08" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: -756px; margin-left: 620px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img09" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left: 620px;">
<img id="myImg" src="car1.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img10" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left: 620px;">
<img id="myImg" src="audiyellow.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img11" src="car1.jpg">
</div>
<div class="overlay">
<div class="tex">Hello World</div>
</div>
</div>

<div class="contain" style=" margin-top: 20px; margin-left: 620px;">
<img id="myImg" src="rollsblue.jpg" alt="Snow" name="myModal" onclick="mod(this);">
<div id="myModal" class="modal">
<span class="close">&times;</span>
<span class="modal-content">
</div>
<div class="overlay">
<div class="tex">Rolls Royce <br> 2014 <br> 4seats </div>
</div>
</div>



<!-- <img src="audiyellow.jpg" style="width: 23%; height:30%; margin-top: 3%;">
     <img src="car1.jpg" style="width: 23%; height:30%;  margin-top: 3%;">
     <img src="audigrey.jpg" style="width: 23%; height:30%;  margin-top: 3%;">
     <img src="chevroletwhite.jpg" style="width: 23%; height:30%; margin-left: 50px; margin-top: -3%;">
     <img src="rollsblue.jpg" style="width: 23%; height:30%; margin-left: 50px; margin-top: -3%;">
     <img src="mercedesgreen.jpg" style="width: 23%; height:30%; margin-left: 50px; margin-top: -3%;">
     <img src="audired.jpg" style="width: 23%; height:30%;  margin-top: -3%;">
     <img src="toyotapurple.jpg" style="width: 23%; height:30%;  margin-top: -3%;">
     <img src="bmwblack.jpg" style="width: 23%; height:30%;  margin-top: -3%;">-->
</div>
</div>
</div>
</div>  	


<?php include 'footer.php';?>
<script type="text/javascript">
var y = 1;

          	function plusy(n){
          		y=y + n;
          		showImage(y);
          	}

            showImage(1);

            function showImage(n)
            {   
                var i;
            	var x = document.getElementsByClassName("brand");
            	if(n>x.length)
            	    {y=1};
            	if(n<1)
            		{y=x.length};
                for (i=0 ; i<x.length ; i++)
                 {
                	x[i].style.display = "none";
                }
                x[y-1].style.display = "block";
            }


function mod(img){
    var modal = document.getElementById(img.name);
    modal.style.display = "block";

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
}
</script>
<script type="text/javascript" src="color.js"></script>
<script type="text/javascript" src="gallery.js"></script>
<script src="https://use.fontawesome.com/4f49581711.js"></script>
</body>
</html>