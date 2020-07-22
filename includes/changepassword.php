<?php
include "material_css/p1header.php";
?>

<?php
include "material_css/p2navbar.php";
?>
<div class="main"  style="font-size:150%;">
<br>

<?php
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<form action="changepassword.php" method="POST">


<div class="form_input">
Login id:
<input type="number" id="loginid" name="loginid" style="font-size:120%" placeholder="Enter login id" >
</div>

<div class="form_input">
Password:
 <input type="password" id="oldpassword" name="oldpassword" style="font-size:120%" placeholder="Enter Your/Customer ID"><br>
 </div>
 <div class="form_input">
 New Password:
 <input type="text" id="newpassword" name="newpassword" style="font-size:120%"placeholder="Enter Your/Customer New ID"><br>
 </div>
<div class="form_input">
Confirm-Password:
<input type="password" id="confirmpassword" name="cpassword" style="font-size:120%" placeholder=" Re-Enter Your/Customer ID"><br>
</div>

<div class="form_input">
<input type="submit"  class="btn" id="submit" name="submit" value="Submit">
</div>
</form>
</div>
<?php

include "material_css/p1footer.php";
?>



<?php
if(isset($_POST['submit'])){
    $loginid=$_POST['loginid'];
    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
    $cpassword=$_POST['cpassword'];

    $loginid=mysqli_real_escape_string($conn,$loginid);
    $oldpassword=mysqli_real_escape_string($conn,$oldpassword);
    $newpassword=mysqli_real_escape_string($conn,$newpassword);
    $cpassword=mysqli_real_escape_string($conn,$cpassword);

    $loginid=htmlentities($loginid);
    $oldpassword=htmlentities($oldpassword);
    $newpassword=htmlentities($newpassword);
    $cpassword=htmlentities($cpassword);

    if($newpassword===$cpassword){
        $sql="update login 
        set password='$cpassword' 
        where login_id=$loginid;";
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['message']="<div class='chip green black-text'>Password Changed succesfuly </div>";
            header("Location: changepassword.php");
        }
        else{
            $_SESSION['message']="<div class='chip red black-text'>Sorry Something Went Wrong,Please Try Again</div>";
            header("Location: changepassword.php");
            
        }
    }
    else{
        $_SESSION['message']="<div class='chip red black-text'>Password didn't Match</div>";
        header("Location: changepassword.php");
        

    }


}
?>

