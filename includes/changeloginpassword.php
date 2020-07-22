<?php
include "material_css/p1header.php";
?>

<?php
include "material_css/p1navbar.php";
?>


 <div class="row">
                            <div class="col l6 offset-l3 m8 offset-m2 s12">
                                <div class="card-panel center teal darken-3" style="margin-top:0.5%;">
                                    <ul class="tabs teal darken-3">
                                        <li class="tab">
                                            <a href="">Change Password</a>
                                        </li>
                                    </ul>
                                </div> 
                                </div>
<div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
                                
 <div class="card-panel center" style="background: rgba(0.05, 0.05, 0.05, 0.05);margin-top:0.5%; margin-left:0%; left:158%">
 <?php
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<form action="changeloginpassword.php" method="POST">
<div class="form_input">
<p style = "font-size:20px">Login ID:</p>
<input type="number" id="loginid" name="loginid" style="font-size:100%" placeholder="Enter login id" >
</div>
<div class="form_input">
<p style = "font-size:20px">Password:</p>
 <input type="password" id="oldpassword" name="oldpassword" style="font-size:100%" placeholder="Enter Your/Customer ID"><br>
 </div>
 <div class="form_input">
 <p style = "font-size:20px">New Password:</p>
 <input type="text" id="newpassword" name="newpassword" style="font-size:100%"placeholder="Enter Your/Customer New ID"><br>
 </div>
<div class="form_input">
<p style = "font-size:20px">Confirm-Password:</p>
<input type="password" id="confirmpassword" name="cpassword" style="font-size:100%" placeholder=" Re-Enter Your/Customer ID"><br>
</div>

<div class="form_input">
<input type="submit"  class="btn" id="submit" name="submit" value="Submit">
</div>
</form>
</div>
</div>
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
            header("Location: login.php");
        }
        else{
            $_SESSION['message']="<div class='chip red black-text'>Sorry Something Went Wrong,Please Try Again</div>";
            header("Location: changeloginpassword.php");
            
        }
    }
    else{
        $_SESSION['message']="<div class='chip red black-text'>Password didn't Match</div>";
        header("Location: changeloginpassword.php");
        

    }


}
?>

