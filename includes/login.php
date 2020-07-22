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
    
<div class="col l4 offset-l2 m3 offset-m1 s12">
<div class="card" style="background: rgba(0.05, 0.05, 0.05, 0.05);margin-top:1%; margin-left:0%; left:158%">
<h3 class="center white-text">Time: <span id="datetime"></span></h3>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
</script>
<div class="card-action">
        <h2 class="center white-text">Search</h2>
        </div>
        <h2 class="center white-text">
        <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        }
       ?>
       </h2>
        <div class="card-content">
        <form action="login.php" method="POST">
       <div class="input-field" >
           <input type="text" style="font-size:25px;" class="center white-text" id="product" name="product" placeholder="Search Any Item....">
           </div>
           <div class="center">
           <input type="submit" id="submit" name="submit" style="font-size:20px;"class="btn btn-large transparent red-text "  value="Search">
           </div>
            </form>
       </div> 
    </div>
</div>
</div>

<?php
}

include "material_css/p1footer.php";
?>
<?php
if(isset($_POST['submit'])){
    $product=$_POST['product'];
    $product=mysqli_real_escape_string($conn,$product);
    $product=htmlentities($product);
    $sql="select product_number from product where p_name='$product';";
    $ans=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($ans);
    $answer=$row['product_number'];
    if(mysqli_num_rows($ans)){
        $sql1="select s_p_unit from stock where s_p_id=$answer;";
        $res=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($res);
        $answer1=$row1['s_p_unit'];
        if($res){
            header("Location: login.php");
            $_SESSION['message']="<div class='chip green black-text'>Only $answer1 Product available in the stock.</div>";
        }
        else{
        header("Location: login.php");
        $_SESSION['message']="<div class='chip red black-text'>Your Desired product is Out Of Stock.</div>";
        }
    }    
    else{
        header("Location: login.php");
        $_SESSION['message']="<div class='chip red black-text'>You Desired Product are not available in these Store.</div>";

    }

        
}