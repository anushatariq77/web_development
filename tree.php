<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Listing</title>
    <link rel="icon" type="image/icon" href="fev.png" />
    <link rel="stylesheet" type="text/css" href="about2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <script type="text/javascript">
        var y = 1;

        function plusy(n) {
            y = y + n;
            showImage(y);
        }

        showImage(1);

        function showImage(n) {
            var i;
            var x = document.getElementsByClassName("brand");
            if (n > x.length) { y = 1 };
            if (n < 1) { y = x.length };
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[y - 1].style.display = "block";
        }


        function mod(img) {

            var modal = img.parentNode.firstChild.nextSibling.nextSibling.nextSibling;
            modal.style.display = "block";


        }
        function close1(x) {

            var modal1 = x.parentNode;
            modal1.style.display = "none";
        }


    </script>
    <script type="text/javascript">
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("color");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
        }

    </script>

    <script src="https://use.fontawesome.com/4f49581711.js"></script>

    <style type="text/css">

#myImg {
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    height: 100%;
    box-shadow:-1px 4px 26px 5px rgba(0,0,0,0.75);  }

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
    width: 90%;
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

                <!--COlor search-->
                <div style="border: 2px solid white; background-color: #afafaf;   width:90%; height: 250px; margin-left: 15px;margin-top: 10%;">
                    <form action="colordetails.php" method="post">
                        <h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;">Search By Color</h1>
                        <div class="initial1">
                            <div class="brand" style="background-color: #afafaf; width:87%; position: absolute;margin-top: 40px;">
<button name="c" value="red" ><img src="boxr.png" style="width:50px; height: 50px; margin-left: 37px; margin-top:-15px; position: absolute;"></button>

<button name="c" value="white"><img src="boxw.png" style="width:50px; height: 50px; margin-top:-15px; margin-left: 118px;position: absolute;"></button>
                                <button name="c" value="yellow"><img src="boxy.png" style="width:50px; height: 50px; margin-top:-15px; margin-left: 197px;  position: absolute;"></button>
                            </div>

                            <div class="brand" style="background-color: #afafaf; width:87%; position: absolute;margin-top: 40px;">
                                <button name="c" value="purple"><img src="boxp.png" style="width:50px;  margin-top:-15px;height: 50px;margin-left: 37px;position: absolute;"></button>
                                <button name="c" value="blue"><img src="boxb.png" style="width:50px; height: 50px;margin-top:-15px; margin-left: 118px; position: absolute;"></button>
                                <button name="c" value="black"><img src="boxbl.png" style="width:50px; height: 50px; margin-top:-15px; margin-left: 197px; position: absolute;"></button>
                            </div>

                            <div class="brand" style="background-color:#afafaf; width: 87%;position: absolute;margin-top: 40px;">
                                <button name="c" value="maroon"><img src="boxm.png" style="width:50px; margin-top:-15px;height: 50px;margin-left: 37px; position: absolute;"></button>
                                <button name="c" value="green"><img src="boxgr.png" style="width:50px;margin-top:-15px; height: 50px; margin-left: 118px;position: absolute;"></button>
                                <button name="c" value="gray"><img src="boxg.png" style="width:50px; height: 50px; margin-top:-15px;margin-left: 197px; position: absolute;"></button>
                            </div>

                    </form>

                    <span class="btn" onclick="plusy(-1)" id="btn1" style="position: absolute;margin-top: 40px;color: black; font-size: 30px; margin-left: 0px;">&#10094;</span>
                    <span class="btn" onclick="plusy(1)" id="btn2" style="position: absolute;margin-top: 40px; margin-left: 260px;color: black; font-size: 30px;">&#10095;</span>
                </div>
            </div>

<!--color closed-->

            <div style="border: 2px solid white; background-color: #afafaf;width:90%; height: 290px; margin-left: 15px; margin-top: 10%;">
                <form action="branddetails.php" method="post">
                    <h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;text-align: center;">Search By Brands</h1>
                    <div class="initial">
                        <div class="brands" style="width:100%; height:100px; margin-top: 20px; background-color: #afafaf">
            <button name="c" value="bmw" style="background-color: #afafaf; width: 90px;"><img src="bg (1).png" style="width: 90px; height: 90px; background-color: #afafaf;  margin-top:20px;margin-left: -3px; width: 100%;"></button>
  <img src="li.jpg" style="margin-top: 10px; background-color:#afafaf;">

                            <button name="c" value="nissan" style="background-color: #afafaf; width:90px;"><img src="nis (1).png" style="width:90px; height: 90px; margin-top:20px;margin-left:-3px; width: 100%; "></button>
                            <img src="li.jpg" style="margin-top: 10px">
                            <button name="c" value="honda" style="background-color: #afafaf; width: 90px">
                            
                            <img src="ho (1).png" style="width:90px; height: 90px; margin-top:20px;margin-left:-3px; width: 100%"></button>
                        </div>

                        <div class="brands" style="width:100%; height:200px; margin-top: 20px;">
                            <button name="c" value="toyota" style="background-color: #afafaf; width: 90px"><img src="try (1).png" style="width: 90px; height: 90px; margin-top:20px;margin-left: -3px; width: 100% "></button>
                          <img src="li.jpg" style="margin-top: 10px;">
                            <button name="c" value="audi" style="background-color: #afafaf; width: 90px;">
                   <img src="au.png" style="width: 90px; height: 90px; margin-top:20px;margin-left: -3px; width:100%">
                            </button>
                            <img src="li.jpg" style="margin-top: 8px;">
                            <button name="c" value="suzuki" style="background-color: #afafaf; width: 90px"><img src="maruti-suzuki (1).png" style="width: 90px; height: 90px;  background-color: #afafaf; margin-top:20px;margin-left: -3px;"></button>
                        </div>

                        <div class="brands" style="width:100%; height:200px; margin-top:20px;">
                            <button name="c" value="rolls royce" style="background-color: #afafaf; width: 90px"><img src="rol2 (1).png" style="width: 90px; height: 90px; margin-top:20px;margin-left: -3px; width: 100% "></button>

                            <img src="li.jpg" style="margin-top: 8px;">

                            <button name="c" value="chevrolet" style="background-color: #afafaf; width: 90px"><img src="ch (1).png" style="width: 90px; height: 90px; margin-top:20px;margin-left: -3px; width: 100%"></button>

                            <img src="li.jpg" style="margin-top: 8px;">

                            <button name="c" value="mercedes" style="background-color: #afafaf; width: 90px;"><img src="tg (1).png" style="width: 90px; height: 90px; margin-top:20px;margin-left: -3px; width: 100%"></button>
                        </div>
                    </div>
                </form>

                </div>
            
 <form action="pricedetails.php" method="post">

                    <div style="border: 2px solid white; background-color: #afafaf;width:90%; height: 320px; margin-left: 15px; margin-top: 10%;">
                        <h1 style="margin: 20px; font-weight: bolder; text-shadow: white 0 0 10px;color: black;">Search By Price</h1>
                        <button name="c" value="500000" style=" background-color:black ; opacity: 0.6; border:15px solid black; margin-top:30px; letter-spacing: 1px; margin-left: 12px; padding: 2px; border-radius: 50%;  color:white; font-weight: bolder; position: absolute;">Above 5 lac </button>
                        <button name="c" value="1000000" style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top:30px; letter-spacing: 1px; margin-left: 165px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 10 lac</button>
                        <button name="c" value="1500000" style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black;  letter-spacing: 1px; margin-top:90px; margin-left: 28px; padding: 2px; color:white; font-weight: bolder;  position: absolute;">Above 15 lac</button>
                        <button name="c" value="2000000" style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top:90px; letter-spacing: 1px; margin-left: 152px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 20 lac</button>
                        <button name="c" value="2500000" style=" background-color:black ; opacity: 0.6; border-radius: 50%; border:15px solid black; margin-top: 145px; letter-spacing: 1px; margin-left: 90px; padding: 2px; color:white; font-weight: bolder; position: absolute;">Above 25 lac</button>
                    </div>
            
            </form>

        </div>


            <div class="as" style=" height: 160vh; width:69%; margin-left: 375px; background-color: #d9dbe0;">
                <div class="gallery" style="width: 70%;height: 8%; margin-top: 30px; border-radius: 20%; margin-left:15%;background-color: rgba(50, 52, 58,0.4);">
            <h1 style="color: black; text-shadow: 3px 3px white; font-size: 4em; margin-left: 170px; font-weight: bolder; margin-top: 13px; position: absolute"><i>SHOWROOM</i></h1>
            </div>

                <div class="sam" style="position: absolute;">
                    <div class="contain" style="margin-top: 150px; margin-left: 40px; margin-top: 3%;">
                        <img id="myImg" src="vezel 3.0 A.T maroon.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img01" src="vezel 3.0 A.T maroon.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">HONDA</span> <br> <span style="font-weight: bold;font-size: 20px;">Vezel</span><br> 2017 <br> 5seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top:10%;  margin-left: 40px; margin-top: 4%; ">
                        <img id="myImg" src="RS5 3.0 M.T green.jpg" alt="car" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img02" src="RS5 3.0 M.T green.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">AUDI</span> <br> <span style="font-weight: bold;font-size: 20px;">RS5</span><br> 2014 <br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style="margin-left: 40px; margin-top:20px; ">
                        <img id="myImg" src="S7 3.4 A.T white.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img03" src="S7 3.4 A.T white.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">AUDI</span> <br> <span style="font-weight: bold;font-size: 20px;">S7</span><br> 2010 <br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style="margin-left: 40px; margin-top:20px; ">
                        <img id="myImg" src="Sweptail 6.7 M.T black (1).jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img04" src="Sweptail 6.7 M.T black (1).jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">ROLLS ROYCE</span> <br> <span style="font-weight: bold;font-size: 20px;">Sweptail</span><br> 2017 <br> 5seats </div>
                        </div>
                    </div>


                    <div class="contain" style=" margin-top: -756px; margin-left: 330px; margin-top: -91%">
                        <img id="myImg" src="swift 1.3 M.T red (1).jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img05" src="swift 1.3 M.T red (1).jpg" \>
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">SUZUKI</span> <br> <span style="font-weight: bold;font-size: 20px;">Swift</span><br> 2014 <br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left: 330px;">
                        <img id="myImg" src="z4 3.2 A.T purple.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img06" src="z4 3.2 A.T purple.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">BMW</span> <br> <span style="font-weight: bold;font-size: 20px;">z4</span><br> 2014 <br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left:330px;">
                        <img id="myImg" src="x3 2.4 A.T blue.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img07" src="x3 2.4 A.T blue.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">BMW</span> <br> <span style="font-weight: bold;font-size: 20px;">x3</span><br> 2017 <br> 5seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left: 330px; height: 70%;">
                        <img id="myImg" src="juke 1.6 A.T yellow.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img08" src="juke 1.6 A.T yellow.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">NISSAN</span> <br> <span style="font-weight: bold;font-size: 20px;">Juke</span><br> 2017 <br> 5seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: -756px; margin-left: 620px; margin-top: -88.5%;">
                        <img id="myImg" src="patrol 4.0 A.T gray  (1).jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img09" src="patrol 4.0 A.T gray  (1).jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">NISSAN</span> <br> <span style="font-weight: bold;font-size: 20px;">Patrol</span><br> 2017<br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left: 620px;">
                        <img id="myImg" src="Impala 2.2 A.T blue (1).jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img10" src="Impala 2.2 A.T blue (1).jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">CHEVROLET</span> <br> <span style="font-weight: bold;font-size: 20px;">Impala</span><br> 2010 <br> 4seats </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left: 620px;">
                        <img id="myImg" src="Ghost 6.5 M.T red  (1).jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <img class="modal-content" id="img11" src="Ghost 6.5 M.T red  (1).jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">ROLLS ROYCE</span> <br> <span style="font-weight: bold;font-size: 20px;">Ghost </span><br> 2017 <br> 5seats  </div>
                        </div>
                    </div>

                    <div class="contain" style=" margin-top: 20px; margin-left: 620px;">
                        <img id="myImg" src="R8 4.0 A.T black.jpg" alt="Snow" name="myModal" onclick="mod(this);">
                        <div id="myModal" class="modal">
                            <span class="close" onclick="close1(this)">&times;</span>
                            <span class="modal-content" id="img12" src="R8 4.0 A.T black.jpg">
                        </div>
                        <div class="overlay">
                            <div class="tex"><span style="font-weight: bolder;font-size: 30px;">AUDI</span> <br> <span style="font-weight: bold;font-size: 20px;">R8 4.0 </span><br> 2017 <br> 5seats </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php';?>

    
<script type="text/javascript" src="color.js"></script>
<script type="text/javascript" src="gallery.js"></script>
<script src="https://use.fontawesome.com/4f49581711.js"></script>
</body>
</html>