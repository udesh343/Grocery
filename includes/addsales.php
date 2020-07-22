<?php
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>

<div class="container" style="margin-left:25px" >
<form action="salespage.php" method="POST">
 <div class="main">
 <h3>Add Sales Details</h3>
 
 <p style = "font-size:20px">Date:</p>
 <div class="form_input">
 <input type="date" name="date" id="date" placeholder="Date"> <br>
 </div>
 
 <p style = "font-size:20px">Selling Amount:</p>
 <div class="form_input">
 <input type="number" name="amount" id="amount" placeholder="Selling Amount"> <br>
 </div>
 
 <p style = "font-size:20px">Description:</p>
 <div class="form_input">
 <input type="text" name="description" id="description" placeholder="Write Somethings"> <br>
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
