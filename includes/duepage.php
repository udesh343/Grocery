<?php
include "material_css/p1header.php";
 if(isset($_POST['submit'])){
  $date=$_POST['date'];
  $amount=$_POST['amount'];
  $cnumber=$_POST['cnumber'];
  $description=$_POST['description'];
 // $passsword=passsword_hash($passsword,PAsSSWORD_BCRYPT);

  $date=mysqli_real_escape_string($conn,$date);
  $amount=mysqli_real_escape_string($conn,$amount); 
  $cnumber=mysqli_real_escape_string($conn,$cnumber); 
  $description=mysqli_real_escape_string($conn,$description); 

  $date=htmlentities($date);
  $amount=htmlentities($amount);
  $cnumber=htmlentities($cnumber);
  $description=htmlentities($description);

  $sql="insert into duedetail(date,due_amount,customer_no,description) values('$date',$amount,$cnumber,'$description');";
  $res=mysqli_query($conn,$sql);
  if($res){
          header("Location: p2inc.php");
          $_SESSION['message']="<div class='chip green black-text'>You have Successfully Registered Your Due Details</div>";
      }
 else{
  header("Location: p2inc.php");
  $_SESSION['message']="<div class='chip red black-text'>Sorry Something went wrong,Please Insert Again</div>";
 }
}

else{
    header("Location: p2inc.php");
    $_SESSION['message']="<div class='chip red black-text'>Sorry Somethings Went Wrong</div>";
   } 
  ?>
