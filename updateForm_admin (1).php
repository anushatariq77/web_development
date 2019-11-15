<?php 
 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'carsdetails');
$q="select * from cars";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

 ?>


 <!DOCTYPE html>
 <html>
 <head>
     <title>Update Car Records</title>
     <link rel="icon" type="image/icon" href="fev.png"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body style ="background-image: url(o1jpg.jpg); background-size: cover; ">
 <h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000; " >UPDATE CAR RECORDS IN DATABASE</h1>
 <a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left: 20px; margin-top: -80px; position: absolute;"></a>
 <form action="updation_admin.php" method="post">

 <table  class="table" style="background: #d68102; height:90%; width: 80%; margin-left: 2%; color:black; opacity: 0.7; position: absolute; ">
     <tr>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Car Id</th>
          
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Name</th> 
          
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Brand</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Model</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Color</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Fuel Economy</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Price</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Category</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Seat Capacity</th>
          <th scope="col" style="font-weight: bolder; font-size: 1.5em">Fuel Type</th>
          <th></th>
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
               <td><button name="car" value="<?php echo $i; ?>" >UPDATE</button></td>
          </tr> <?php }

     ?>
 </table>
 <br/><input type="submit" value="Update" style="margin-top: 190%; height: 40%; margin-left: 30%; width: 20%; font-size: 3em; height: 40%; background-color: black; opacity: 0.7; color: white;"> 
</form>
 </body>
 </html>