The Hot Tea Shop
   
   <script>
   function validate(){
           var uname=a.name.value;
           var pass=a.passw.value;
           var confpass=a.cpass.value;
           var phone=a.ph.value;
           var add=a.addr.value;
           var n = pass.length;
           var k= phone.length;
           if(uname==='' || pass==='' || confpass==='' || phone==='' || add===''){
               alert("please enter all credentials")
           }
           else {
               if (confpass!=pass) {
               alert("passwords don't match")
           }
               else if(n<8){
                   alert("Password must be greater than 8 characters!")
               }
               else if(k<10){
                   alert("phone number must be greater than 10 characters!")
               }
               else {
               alert("valid credentials! signup successful!")
           }
           }
           }
</script>
</head>
<body background="back3.jpg">
<font size="8">
  <center>THE-HOT-TEA-SHOP</font><br><br><br>
  </center>
  <center><font size="4">HotTea-Delivering your beverage Promptly<br>
   Since 1975 </center></font>

</font>
<div class="login-page">
 <div class="form">
   <form name="a">
       <p>
       <label for="Name" class="floatLabel">Name</label>
       <input type="text" id="name" name="name" placeholder="Enter your name"><br>
       </p>
       <p>
       <label for="Address" class="floatLabel">Address</label>
       <input type="text" id="addr" name="addr" placeholder="Enter your address"><br>
       </p>
       <p>
       <label for="Phone Number" class="floatLabel">Phone Number</label>
       <input type="number" id="ph" name="ph" placeholder="Enter your phone number"><br>
       </p>
       <p>
       <label for="password" class="floatLabel"></label>
       Password<input type="text" id="passw" name="passw" placeholder="Password">
       <h4><span>Enter a password longer than 8 characters</span></h4>
       <p>
       <label for="confirm_password" class="floatLabel">Confirm Password</label>
       <input id="cpass" name="cpass" type="password" placeholder="Re-enter Password">
       </p>
       <input type="button" class= "button" value="Submit" onclick="validate()"><br>
   </form>
</div>
</div>
<center><font size="4">HotTea-Delivering your beverage Promptly<br>
Since 1975 </center></font>
</body>
<?php

include('conn.php');
$name=$_POST['name'];
$addr=$_POST['addr'];
$ph=$_POST['ph'];
$passw=$_POST['passw'];
$sql="insert into customer (customer,address,phone_no,password) values('$name','$addr','$ph','$passw')";
if(mysqli_query($conn,$sql))
 
 header("Location:http://localhost/ordersimple/index.php");
else
 echo "Insertion failed";
mysqli_close($conn);
?>