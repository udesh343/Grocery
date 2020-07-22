<?php
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>


<div class="container" style="margin-left:25px" >
<form action="vendorpage.php" method="POST">
 <div class="main">
 <h3>Add Vendor Details</h3>

 <p style = "font-size:20px"> Name:</p> 
 <div class="form_input">
 <input type="text" name="name" id="name" placeholder="Name"> <br>
 </div>
 
 <p style = "font-size:20px">Adress:</p>  
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
 
 <p style = "font-size:20px">Vendor Owner Name:</p> 
 <div class="form_input">
  <input type="text" name="oname" id="oname" placeholder="Owner Name"> <br>
  </div>
  
  <p style = "font-size:20px">Description:</p> 
  <div class="form_input">
<input type="text" name="description" id="description" placeholder="Write Something About Vendor"> <br>
</div>
<div class="form_input">
 <input type="submit" name="submit" class="btn" value="Submit">
 <input type="reset" name="reset" class="btn" value="Reset">
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
