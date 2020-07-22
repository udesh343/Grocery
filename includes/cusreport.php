<?php 
include "material_css/p1header.php";
if(isset($_SESSION['username'])){
?>

<?php
include "material_css/p2navbar.php";
?>
<div class="main" style="font-size:160%">
<h3>Customer Reports</h3>

<table style="width:90%" border='5px'>
<thead>
<tr style="border-bottom: 3px solid black;">
    <th>Login Id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact Number</th>
    <th>Email</th>
  </tr>
</thead>
  <?php
$sql="select * from customer";
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
