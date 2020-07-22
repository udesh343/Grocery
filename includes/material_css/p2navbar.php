<div class="navbar-fixed">
      <nav class="teal darken-3">
      <div class="navbar-wrapper">
                       <div class="container">
                            <a href="" class="brand-logo center">Grocery Management System </a>
                            <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menue</i></a>
                         <ul class="right hide-on-small-and-down"></ul>
                            </div>
                            </div>
                            </nav>
                            </div>
                            <div class="navbar-fixed">
                     <nav class="teal darken-3">
                        <div class="navbar-wrapper">
                            <div class="container">
                            <a href="" class="button-collapse show-on-large" data-activates="sidenav"></a>
                         <ul class="right hide-on-small-and-down">
                            <li><a href="p2inc.php">HOME</a> </li>
                            <li><a href="" class="dropdown-button" data-activates="dropdown1">ADMINISTRATION</a></li>
                            <li><a href="" class="dropdown-button" data-activates="dropdown2">REPORTS</a></li>
                            <li><a href="myaccount1.php">MY ACCOUNT</a></li>
                            <li><a href="changepassword.php">CHANGE PASSWORD</a></li>
                            <li><a href="logout.php"><i class="material-icons">settings_power</i></a></li>
                        </ul>
                        <ul id="dropdown1" class="dropdown-content teal darken-3">
                            <li><a href="addcustomer.php"><font color="white">ADD NEW CUSTOMER</font></a></li>
                            <li><a href="addproduct.php"><font color="white">ADD PRODUCT</font></a></li>
                            <li><a href="addvendor.php"><font color="white">ADD VENDOR</font></a></li>
                            <li><a href="addpayment.php"><font color="white">ADD PAYMENT</font></a></li>
                            <li><a href="addsales.php"><font color="white">ADD SELLS</font></a></li>
                            <li><a href="addstock.php"><font color="white">ADD STOCK</font></a></li>
                            <li><a href="adddue.php"><font color="white">ADD DUE</font></a></li>
                        </ul>
                        <ul id="dropdown2" class="dropdown-content teal darken-3">
                            <li><a href="cusreport.php"><font color="white">CUSTOMER REPORT</font></a></li>
                            <li><a href="fullduereport.php"><font color="white">CUSTOMER-DUE REPORT</font></a></li>
                            <li><a href="duereport.php"><font color="white">CUSTOMER-NET REPORT</font></a></li>
                            <li><a href="prodreport.php"><font color="white">PRODUCT REPORT</font></a></li>
                            <li><a href="vendreport.php"><font color="white">VENDOR REPORT</font></a></li>
                            <li><a href="payreport.php"><font color="white">PAYMENT REPORT</font></a></li>
                            <li><a href="sellsreport.php"><font color="white">SELLS REPORT</font></a></li>
                            <li><a href="stockreport.php"><font color="white">STOCK REPORT</font></a></li>
                        </ul>
                        </div>  
                    </div>
        
                </nav>
                </div>
               
                
              <ul id="sidenav" class="side-nav fixed" style="background: rgba(0.3, 0.3, 0.3, 0.3);">
                            
                                <div class="user-view">
                                    <div class="background">
                                        <img src="image/gs.jpg" alt="" class="responsive-img">
                                    </div>

                                    <span class="white-text name"><?php
                                    $user=$_SESSION['username'];
                                    $sql="select s_owner_name from store where s_login_id=$user;";
                                    $res=mysqli_query($conn,$sql);
                                    $row=mysqli_fetch_assoc($res);
                                    echo $row['s_owner_name'];
                                    ?>
                                    </span>
                                    <span class="white-text email"><?php
                                    $sql="select s_email from store where s_login_id=$user;";
                                    $res=mysqli_query($conn,$sql);
                                    $row=mysqli_fetch_assoc($res);
                                    echo $row['s_email'];
                                    ?>
                                    </span>
                                    </div>
                                      

                            <li><a href="cusreport.php"><font color="white">CUSTOMER REPORT</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="fullduereport.php"><font color="white">CUSTOMER DUE-REPORT</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="duereport.php"><font color="white">CUSTOMER NET-REPORT</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="prodreport.php"><font color="white">PRODUCT REPORT</font></a></li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="vendreport.php"><font color="white">VENDOR REPORT</font></a></li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="payreport.php"><font color="white">PAYMENT REPORT</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="sellsreport.php"><font color="white">SALES REPORT</font></a></li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="stockreport.php"><font color="white">STOCK REPORT</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            </div>
                            </ul>
                            
                    
                      
                        




