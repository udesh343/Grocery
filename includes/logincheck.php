<?php 
include "material_css/p1header.php";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
 
    $username=mysqli_real_escape_string($conn,$username); 
    $password=mysqli_real_escape_string($conn,$password); 

    $username=htmlentities($username);
    $password=htmlentities($password);
    $sql="select password from login where login_id=$username;";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];
    //if(password_verify($password,$pass)){
        $sql1="select * from store where s_login_id=$username;";
        $res1=mysqli_query($conn,$sql1);
        $num = mysqli_num_rows($res1);
    if($password==$pass && $num){
         $_SESSION['username']=$username;
         header("Location: p2inc.php");
    }
    else{
        echo "unsuccesful";
        header("Location: p1inc1.php");
        $_SESSION['message']="<div class='chip red black-text'>Sorry Credentials Don't Match</div>";
    }
}
