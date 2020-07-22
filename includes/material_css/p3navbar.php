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
                            <li><a href="">ABOUT US</a></li>
                            <li><a href="" class="dropdown-button" data-activates="dropdown1">REPORTS</a></li>
                            <li><a href="myaccount2.php">MY ACCOUNT</a></li>
                            <li><a href="logout.php"><i class="material-icons">settings_power</i></a></li>
                        </ul>
                        <ul id="dropdown1" class="dropdown-content teal darken-3">
                            <li><a href="cuspayreport.php"><font color="white">PAYMENT REPORT</font></a></li>
                            <li><a href="duereport1.php"><font color="white">DUE REPORT</font></a></li>
                            <li><a href="netreport1.php"><font color="white">NET REPORT</font></a></li>
                        </ul>
                        </div>  
                    </div>
        
                </nav>
                </div>
               
                
              <ul id="sidenav" class="side-nav fixed" style="background: rgba(0.3, 0.3, 0.3, 0.3);">
                            
                                <div class="user-view">
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
                                      

                            <li><a href="p3inc.php"><font color="white">HOME</font></a> </li>
                            <div class="divider teal darken-3"></div>
                            <li><a href=""><font color="white">ABOUT US</font></a></li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="" class="dropdown-button" data-activates="dropdown2"><font color="white">REPORTS</font></a></li>
                            <div class="divider teal darken-3"></div>
                            <li><a href="logout.php"><font color="white">LOG OUT</font></a></li>
                            <div class="divider teal darken-3"></div>
                            </div>
                            </ul>
                            <ul id="dropdown2" class="dropdown-content teal darken-3">
                            <li><a href="payreport.php"><font color="white">PAYMENT REPORT</font></a></li>
                        </ul>
                            
                    
                      
                        




