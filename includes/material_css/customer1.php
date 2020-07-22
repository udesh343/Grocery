<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>


<div class="container" style="margin-left:25px" id="customer1">
<form action="addcustomer.php" method="POST">

<div class="container" style="margin-left:25px" >

 <div class="main">
 Name:
 <div class="form_input">
 <input type="text" name="name" id="name" placeholder="Name"> <br>
 </div>
 Address: 
 <div class="form_input">  
 <input type="text" name="address" id="address" placeholder="Address"> <br>
 </div>
 Email:
 <div class="form_input">
 <input type="email" name="email" id="email" placeholder="Enter Email"><br>
 </div>
 Contact Number:
 <div class="form_input">
  <input type="number" name="contactnumber" id="contactnumber" placeholder="Contact Number"> <br>
  </div>
  Login Id:
  <div class="form_input">
<input type="number" name="loginid" id="loginid" placeholder="Login Id"> <br>
</div>
New Password:
<div class="form_input">
<input type="text" name="newpassword" id="newpassword" placeholder="Password"> <br>
</div>
Password:
<div class="form_input">
  <input type="password" name="password" id="password" placeholder=" Re-enter Password"> <br>
</div>
<div class="form_input">
 <input type="submit" name="sub" class="btn" value="ADD">
 <input type="reset" name="res" class="btn" value="RESET">
</div>

</form>
</div>
<div style="height:100px"></div>
  <?php
}
else{
  header("Location: login.php");
  $_SESSION['message']="<div class='chip red black-text'>Login To Continue</div>";
}
  include "material_css/p1footer.php";
  ?>
