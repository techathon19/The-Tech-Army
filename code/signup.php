<?php
$name=$_POST['name'];
$addr=$_POST['addr'];
$ph=$_POST['ph'];
$passw=$_POST['passw'];
$conn=mysqli_connect("localhost:3306","root","","foodsys");
if(!$conn)
 die("connection error".mysqli_connect_error());
echo "Connection successful";
echo "<br>";
$sql="insert into customer (customer,address,phone_no,password) values('$name','$addr','$ph','$passw')";
if(mysqli_query($conn,$sql))
 
 header("Location:http://localhost/ordersimple/index.php");
else
 echo "Insertion failed";
mysqli_close($conn);
?>