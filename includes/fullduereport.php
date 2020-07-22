<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>
<div class="main" style="font-size:160%">
<h3>DUE Reports</h3>

<table style="width:90%" border='5px'>
<thead>
<tr style="border-bottom: 3px solid black;">
   <th>Date</th>
    <th>Due Amount</th>
    <th>Customer Number</th>
    <th>Description</th>
  </tr>
</thead>
  <?php
    $sql2="SELECT * from duedetail;"; 
    $res2=mysqli_query($conn,$sql2);
    
    while($row1=mysqli_fetch_array($res2)){

  ?>
<tbody>
<tr>
  <td><?php echo $row1[0]; ?></td>
  <td><?php echo $row1[1]; ?></td>
  <td><?php echo $row1[2]; ?></td>
  <td><?php echo $row1[3]; ?></td>
    </td>
  
  
  
</tr>

</tbody>
<?php

   


}
?>


</table>

</div>





<?php
}

  include "material_css/p1footer.php";
  ?>
