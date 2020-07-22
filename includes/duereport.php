<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>
<div class="main" style="font-size:160%">
<h3>Net-Balance Reports</h3>

<table style="width:90%" border='5px'>
<thead>
<tr style="border-bottom: 3px solid black;">
    <th>Customer ID</th>
    <th>Due Amount</th>
    <th>Paid Amount</th>
    <th>Remaining Amount</th>
  </tr>
</thead>
  <?php
    $sql2="SELECT * from due_pay;"; 
    $res2=mysqli_query($conn,$sql2);
    
    while($row1=mysqli_fetch_array($res2)){
      $cust_no=$row1[0];

  ?>
<tbody>
<tr>
  <td><?php echo $row1[0]; ?></td>
  <td><?php echo $row1[1]; ?></td>
  <td><?php echo $row1[2]; ?></td>
  <td><?php
   $res3=mysqli_query($conn,"SELECT SUB($row1[1],$row1[2])");
    $row3=mysqli_fetch_array($res3);
    
    echo $row3[0]; ?>
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
