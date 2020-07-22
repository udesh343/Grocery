<div class="row " id="login1">
                            <div class="col l6 offset-l3 m8 offset-m2 s12">
                                <div class="card-panel center teal darken-3" style="margin-top:1%;">
                                    <ul class="tabs teal darken-3">
                                        <li class="tab">
                                            <a href="#login">Login</a>
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
                                  <form action="logincheck1.php" method="POST">
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
                                </div> 