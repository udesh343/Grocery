<?php
include "material_css/p1header.php";
 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $contactnumber=$_POST['contactnumber'];
  $loginid=$_POST['loginid'];
  $password=$_POST['password'];
 // $password=password_hash($password,PASSWORD_BCRYPT);

  $name=mysqli_real_escape_string($conn,$name);
  $address=mysqli_real_escape_string($conn,$address);
  $email=mysqli_real_escape_string($conn,$email);  
  $contactnumber=mysqli_real_escape_string($conn,$contactnumber); 
  $loginid=mysqli_real_escape_string($conn,$loginid);  
  $password=mysqli_real_escape_string($conn,$password); 

  $name=htmlentities($name);
  $address=htmlentities($address);
  $email=htmlentities($email);
  $contactnumber=htmlentities($contactnumber);
  $loginid=htmlentities($loginid);
  $password=htmlentities($password);
  $sql1="select * from customer where c_email='$email' or c_login_id=$loginid;";
  $res1=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($res1)){
      header("Location: p2inc.php");
      $_SESSION['message']="<div class='chip red black-text'>You Have Already Register Your Customer Details</div>";
  }
  else{
    $sql2="insert into login(login_id,password) values($loginid,'$password')";
  $res2=mysqli_query($conn,$sql2);
  if($res2){
    $sql3="insert into customer(c_name,c_address,c_email,c_mobile,c_login_id) values('$name','$address','$email',$contactnumber,$loginid);";
      $result=mysqli_query($conn,$sql3);
      if($result){
          header("Location: p2inc.php");
          $_SESSION['message']="<div class='chip green black-text'>you have been Successfully Registered Your Customer Details</div>";
      }
      else{
          header("Location: p2inc.php");
          $_SESSION['message']="<div class='chip red black-text'>Sorry Something went wrong,Please Insert Again</div>";
         }
 } 
 else{
  header("Location: p2inc.php");
  $_SESSION['message']="<div class='chip red black-text'>Sorry Something went wrong</div>";
 }

  }
}
else{
    header("Location: p2inc.php");
    $_SESSION['message']="<div class='chip red black-text'>Sorry value is not inserted correctly</div>";
   } 
  ?>
