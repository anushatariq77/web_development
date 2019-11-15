<?php

$oname=$_POST['oname'];
$omail=$_POST['omail'];
$ocontact=$_POST['ocontact'];
$odate=$_POST['odate'];
$ocar=$_POST['ocid'];


$con=mysqli_connect('localhost','root');

                mysqli_select_db($con,'carsdetails');
                $w="select userid from user where email= '$omail' ";
                $result1=mysqli_query($con,$w);
                $num1=mysqli_num_rows($result1);
                for($i=1;$i<=$num1;$i++)
                {
                  $row=mysqli_fetch_array($result1);
                  $var= $row['userid']; 
								} 
															
                // $q="insert into carorder (uid,carid,uname,uemail,contact,date)  values ('$var','$ocar','$oname','$omail','$ocontact','$odate')";
                $q="INSERT INTO `carorder` (`o_id`, `uid`, `carid`, `uname`, `uemail`, `contact`, `date`) VALUES (null,'$var','$ocar','$oname','$omail','$ocontact','$odate')";
                if (mysqli_query($con, $q)) {
                  echo "THANK YOU for your order.We will contact you soon!";
                }
                else{
                  echo mysqli_error($con);
                  echo "error";
                }
								mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
	<title>order</title>
</head>
<body>

<p>
	<!-- <?php

    if($status==1){
    	echo "THANK YOU for your order.We will contact you soon!" ;
    }
    else
			echo "ORDER FAILED";
      echo $q;
      echo $status;
			 
	?> -->

  
</p>
Do you want to make more orders? <a href="tree.php">click here!</a><br>

Go back to <a href="eg.php">Home Page</a></p>
</body>
</html>