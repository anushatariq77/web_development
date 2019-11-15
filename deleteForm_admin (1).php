<?php 
 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="select * from cars";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

$idofpackage=null;
foreach ($_POST as $key => $value)
{
     $idofpackage=$key; 
}

$q="delete from cars where cid=$idofpackage";

$object = mysqli_query($con,$q); 

if ($object) 
{
      header('location:http://localhost/web/deleteForm_admin.php');
}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <title>Delete Car Records</title>
     <link rel="icon" type="image/icon" href="fev.png"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!--<style type="text/css">
     #table{
               
               width: 80%;
          }
          #table tr{
               background: lightblue;
          }
     </style>-->
 </head>
 <body style="background-image: url(free.jpeg); background-size: cover; ">
 <h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000; ">DELETE RECORDS FROM DATABASE</h1>
 <a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left: 50px; margin-top: -80px; position: absolute;"></a>

 <form action="deleteForm_admin.php" method="post">
   <table class="table" style="background: #560606; height:90%; width: 80%; margin-left: 8%; color:white; margin-top: 3%; opacity: 0.8; position: absolute;">
     <tr>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Car Id</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Image</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Name</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Brand</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Model</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Color</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Fuel Economy</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Price</th>
          <th  th scope="col" style="font-weight: bolder; font-size: 1.5em">Category</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Seat Capacity</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Fuel Type</th>
          <th th scope="col" style="font-weight: bolder; font-size: 1.5em">Select To Delete</th>
     </tr>
     <?php

     for($i=1;$i<=$num;$i++)
     {
          $row=mysqli_fetch_array($result);
          ?>
          <tr>
               <td><?php echo $row['cid']; ?></td>
               <td><?php echo $row['image']; ?></td>
               <td><?php echo $row['cname']; ?></td>
               <td><?php echo $row['brand']; ?></td>
               <td><?php echo $row['model']; ?></td>
               <td><?php echo $row['color']; ?></td>
               <td><?php echo $row['fuel_economy']; ?></td>
               <td><?php echo $row['price']; ?></td>
               <td><?php echo $row['category']; ?></td>
               <td><?php echo $row['seat_capacity']; ?></td>
               <td><?php echo $row['fuel_type']; ?></td>
               <td><button type="submit" name="<?php echo $row['cid']; ?>">Delete</button></td>
          </tr> <?php }

     ?>
     
 </table> <br/>
 </form>

 
 </body>
 </html>