<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p3navbar.php";
?>
<div class="main" style="font-size:160%">
<h3>Payment Reports</h3>

<table style="width:90%;" >
<thead>
<tr style="border-bottom: 3px solid black;">
    <th>Payment Number</th>
    <th>Customer Id</th>
    <th>Payment Date</th>
    <th>Payment amount</th>
    <th>Description</th>
  </tr>
</thead>
  <?php
  $user=$_SESSION['username'];
  $sqli="select customer_id from customer where c_login_id=$user;";
 $resu=mysqli_query($conn,$sqli);
 $rowu=mysqli_fetch_assoc($resu);
$id=$rowu['customer_id'];
$sql="select * from Payment where customer_no=$id;";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){
  ?>
<tbody>
<tr>
  <td><?php echo $row[0]; ?></td>
  <td><?php echo $row[1]; ?></td>
  <td><?php echo $row[2]; ?></td>
  <td><?php echo $row[3]; ?></td>
  <td><?php echo $row[4]; ?></td>
  
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
