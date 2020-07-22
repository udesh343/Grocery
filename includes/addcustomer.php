<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>


<div class="container" style="margin-left:25px" id="customer1">
<form action="customerpage.php" method="POST">


 <div class="main">
 <h3>Add Customer Details</h3>
 <p style = "font-size:20px">Name:</p>
 <div class="form_input">
 <input type="text" name="name" id="name" placeholder="Name"> <br>
 </div>
 <p style = "font-size:20px">Address:</p>
 <div class="form_input">  
 <input type="text" name="address" id="address" placeholder="Address"> <br>
 </div>
 <p style = "font-size:20px">Email:</p>

 <div class="form_input">
 <input type="email" name="email" id="email" placeholder="Enter Email"><br>
 </div>
 <p style = "font-size:20px">Contact Number:</p>

 <div class="form_input">
  <input type="number" name="contactnumber" id="contactnumber" placeholder="Contact Number"> <br>
  </div>
  <p style = "font-size:20px">Login ID::</p>

  <div class="form_input">
<input type="number" name="loginid" id="loginid" placeholder="Login Id"> <br>
</div>
<p style = "font-size:20px">New Password:</p>

<div class="form_input">
<input type="text" name="newpassword" id="newpassword" placeholder="Password"> <br>
</div>
<p style = "font-size:20px">Password:</p>

<div class="form_input">
  <input type="password" name="password" id="password" placeholder=" Re-enter Password"> <br>
</div>
<div class="form_input">
 <input type="submit" name="submit" class="btn" value="ADD">
 <input type="reset" name="res" class="btn" value="RESET">
</div>
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
