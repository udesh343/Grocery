<?php
include "material_css/p1header.php";
?>

<?php
if(isset($_SESSION['username'])){
    header("Location: p2inc.php");
}
else{
?>

<?php
include "material_css/p1navbar.php";
?>



    <div class="row">
    
<h5>Owner Of The Software : Udesh Kumar Chaudhary/Rahul Kumar Chaudhary<br><br>

Collage Name : Acharya Institute Of Technology<br><br>


Branch Name : Information Science and Engineering<br><br>
Contact Number : 9108386256

<h5>

</div>





    


<?php
}

include "material_css/p1footer.php";
?>