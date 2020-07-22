<?php
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>



<div class="container" style="margin-left:25px" >
<form action="stockpage.php" method="POST">
 <div class="main">
 
 <h3>Add Stock Details</h3>
 <p style = "font-size:20px">Product Name:</p>
 <div class="form_input">
 <input type="text" name="name" id="name" placeholder="Name"> <br>
 </div>

 <p style = "font-size:20px"> Select Type:</p> 
 <div class="form_input">  
 <input type="text" name="type" id="type" placeholder="Please Select"> <br>
 </div>
 
 <p style = "font-size:20px"> Select Company:</p>
 <div class="form_input">  
 <input type="text" name="company" id="company" placeholder="Please Select"> <br>
 </div>

 <p style = "font-size:20px"> Product Unit:</p>
 <div class="form_input">  
 <input type="number" name="unit" id="unit" placeholder="Select unit"> <br>
 </div>
 
 <p style = "font-size:20px">Description:</p>
 <div class="form_input">  
 <input type="text" name="description" id="description" placeholder="Write Something about the Stock"> <br>
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
