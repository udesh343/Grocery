                       <div class="row " id="login1">
                            <div class="col l6 offset-l3 m8 offset-m2 s12">
                                <div class="card-panel center teal darken-3" style="margin-top:1%;">
                                    <ul class="tabs teal darken-3">
                                        <li class="tab">
                                            <a href="#login">Login</a>
                                        </li>
                                        <li class="tab teal darken-3">
                                            <a href="#signup">Sign Up</a>
                                        </li>
                                    </ul>
                                </div> 
                                </div>
                                <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
                                
                                    <div class="card-panel center" style="background: rgba(0.05, 0.05, 0.05, 0.05);margin-top:1%; margin-left:0%; left:158%">
                                    <h5>Login To Continue</h5>
                                    <?php
                                    if(isset($_SESSION['message'])){
                                      echo $_SESSION['message']; 
                                      unset($_SESSION['message']);

                                    }
                                    ?>
                                  <form action="logincheck.php" method="POST">
                                  <p style = "font-size:20px">Login ID:</p>
                                  <div class="input-field">
                                        <input type="number" name="username" id="username" placeholder="Username"> 
                                    </div>
                                    <p style = "font-size:20px">Password:</p>
                                    <div class="input-field">
                                        <input type="password" name="password" id="password" placeholder="Password">
                                    </div>
                                    <input type="submit" name="login" class="btn" value="Login">
                                    <a href="changeloginpassword.php"><font color="red">&nbsp &nbsp Forgot Password?</font></a>
                                  </form>
                
                                     </div>

                                </div>   
                                <div class="col l6 offset-l3 m20 offset-m2 s12" id="signup">
                                  <div class="card-panel center"style="background: rgba(0.05, 0.05, 0.05, 0.05);margin-top:1%">
                                    <h5>SignUp Now</h5>
                                  <form action="signup.php" method="POST">
                                  <div class="input-field">
                                   <p style = "font-size:20px"> Email:</p>
                                        <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                                        <label for="email" data-error="Invalid Email Format" data-success="Valid Email"></label>
                                    </div>
                                    <div class="input-field">
                                    <p style = "font-size:20px">Store Name:</p>
                                        <input type="text" name="storename" id="storename" placeholder="Store Name"> 
                                    </div>
                                    <div class="input-field">
                                    <p style = "font-size:20px">Address:</p>
                                        <input type="text" name="storeaddress" id="storeaddress" placeholder="Store Adress"> 
                                    </div>
                                    <div class="input-field">
                                   <p style = "font-size:20px">Contact Number:</p>
                                        <input type="number" name="contactnumber" id="contactnumber" placeholder="Contact Number"> 
                                    </div>
                                    <div class="input-field">
                                    <p style = "font-size:20px">Owner Name:</p>
                                        <input type="text" name="storeownername" id="storownerename" placeholder="Store Owner Name"> 
                                    </div>
                                    <div class="input-field">
                                   <p style = "font-size:20px">Store Pan-Number:</p>
                                        <input type="text" name="storepannumber" id="storepannumber" placeholder="Store Pan Number Of your Shop"> 
                                    </div>
                                    <div class="input-field">
                                    <p style = "font-size:20px">Store ID:</p>
                                        <input type="text" name="storeid" id="storeid" placeholder="Store Id"> 
                                    </div>
                                    <div class="input-field">
                                   <p style = "font-size:20px">Password</p>:
                                        <input type="text" name="newpassword" id="newpassword" placeholder="Password">
                                    </div>
                                    <div class="input-field">
                                    <p style = "font-size:20px">Confirm Password:</p>
                                        <input type="password" name="password" id="password" placeholder=" Re-enter Password">
                                    </div>
                                    <input type="submit" name="signup" class="btn" value="Sign Up">
                                  </form>
                                  </div>
                                </div>
                            </div>  
                            
                    
                      
                        
                    
                    