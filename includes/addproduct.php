<?php
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>

<div class="container" style="margin-left:25px" >
<form action="productpage.php" method="POST">
 <div class="main">
 <h3>Add Product Details</h3>

<p style = "font-size:20px">Product Name:</p>
 <div class="form_input">
 <input type="text" name="name" id="name" placeholder="Name"> <br>
 </div>
 
 <p style = "font-size:20px">Select Type: </p>
 <div class="form_input">  
 <input type="text" name="type" id="type" placeholder="Please Select"> <br>
 </div>
 
 <p style = "font-size:20px">Select Company:</p>
 <div class="form_input">  
 <input type="text" name="company" id="company" placeholder="Please Select"> <br>
 </div>
 
 <p style = "font-size:20px">Product Unit:</p>
 <div class="form_input">  
 <input type="number" name="unit" id="unit" placeholder="Unit"> <br>
 </div>

 <p style = "font-size:20px">Price Per Unit:</p>
 <div class="form_input">  
 <input type="number" name="cp" id="cp" placeholder="Cost Price"> <br>
 </div>

 <p style = "font-size:20px"> Selling Price Unit:</p>
 <div class="form_input">  
 <input type="number" name="sp" id="sp" placeholder="Selling Price"> <br>
 </div>

 <p style = "font-size:20px"> Vendor(Supplier) Id:</p>
 <div class="form_input">  
 <input type="number" name="vendorid" id="vendorid" placeholder="Vendor Id"> <br>
 </div>
 
 <p style = "font-size:20px">Description:</p>
 <div class="form_input">  
 <input type="text" name="description" id="description" placeholder="Write Any Things about the Product"> <br>
 </div>
 <div class="form_input"> 
 <input type="submit" name="submit" class="btn" value="ADD">
 <input type="reset" name="reset" class="btn" value="RESET">
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
