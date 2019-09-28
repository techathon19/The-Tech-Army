<?php
  include('conn.php');
  $db = mysqli_connect('localhost', 'root', '', 'foodsys');
   $ph = $_POST['ph'];
   $password = $_POST['passw'];
   $sql_u = "SELECT * FROM customer WHERE phone_no='$ph'";
   $sql_e = "SELECT * FROM customer WHERE password='$password'";
   $res_u = mysqli_query($db, $sql_u);
   $res_e = mysqli_query($db, $sql_e);
   if ((mysqli_num_rows($res_u) > 0)&&(mysqli_num_rows($res_e) > 0))
    {
      header("Location:http://localhost/ordersimple/index.php");
    }
    else
    {
      echo "LOGIN FAILED";
    }
?>