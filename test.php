<?php

$oname=$_POST['oname'];
$omail=$_POST['omail'];

$con=mysqli_connect('localhost','root');
                mysqli_select_db($con,'carsdetails');
                $q="select * from user where email= '$omail' ";
                $result1=mysqli_query($con,$q);
                $num1=mysqli_num_rows($result1);
                for($i=1;$i<=$num1;$i++)
                {
                  $row=mysqli_fetch_array($result1);
                  $var= $row['userid']; 
                   
                  $q="insert into order(userid_fk,cid_fk,uname,uemail,contact,date) values ('$var','$oname','$omail','$ocontact','$odate')";
                  $status=mysqli_query($con,$q);
                  mysqli_close($con);
                  
                  ?>
                } 
