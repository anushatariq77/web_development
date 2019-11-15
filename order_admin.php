
<?php 
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'carsdetails');
 $q="select * from carorder";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 mysqli_close($con);
 
  ?>
 
 
  <!DOCTYPE html>
  <html>
  <head>
      <title>View Orders</title>
      <link rel="icon" type="image/icon" href="fev.png"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!--<style>
           #table{
                
                width: 80%;
           }
           #table tr{
                background: #101c30;
 
           }
      </style>--> </head>
  <body style="background-image: url(maxresdefault.jpg); background-size: cover; ">
  <h1 align="center" style="font-weight: bolder; font-size: 4em;  color: white; text-shadow: 5px 5px 7px #000000;  "> CAR RECORDS</h1>
  <a href="pointex.html"><img src="bb (1).png" style="width: 100px; margin-left: 80px; margin-top: -80px; position: absolute;"></a>
 
 
  <table class="table" style="background-color: rgb(173, 52, 151, 0.7) ; height:30%; width: 80%; margin-left: 8%; color: white; position: absolute;">
      
      <tr >
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">order Id</th>
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">User Id</th>
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">User Name</th> 
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">User Email</th>
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">Contact number</th>
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">Order date</th>
           <th scope="col" style="font-weight: bolder; font-size: 1.5em">Car Id</th>
           <th th scope="col" style="font-weight: bolder; font-size: 1.5em">View detail</th>
           
 
      </tr>
      <?php
 
      for($i=1;$i<=$num;$i++)
      {
           $row=mysqli_fetch_array($result);
           ?>
           
 
                <td style="font-size: 1.5em;"><?php echo $row['o_id']; ?></td>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['uname']; ?></td>
                <td><?php echo $row['uemail']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['carid']; ?></td>
                <td><form action="abc.php" method="post"><button style="color: black;" class="but" name="car" value="<?php echo $row['carid']; ?>" >Details</button></td> </form>
           </tr> <?php }
 
      ?>
 
  </table>
  </body>
  </html>