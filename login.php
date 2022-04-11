<?php
session_start();
include('partial/header.php');?>
    <!-- Elements -->
    <section class="section login-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="section-login">
                        <div id="login-modal" class="login">
                            <div class="form-title">
                                <h4>Login</h4>
                              
                            </div>
                           
                            <form id="loginform" name="loginform" method="post" action="check.php">
                                <div class="email-wrap">
                                    <label for="user-email">Your email address</label>
                                    <input type="text" size="30" value="" class="input" id="user-email" name="log">
                                </div>     
                                <div class="pass-wrap">
                                    <label for="user-pass">Password</label>
                                    <input type="password" size="30" value="" class="input" id="user-pass" name="password">
                                </div>

                                <div class="option-login">
                                    <div class="remember">
                                        <input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
                                    </div>
                                    <div class="forgot">
                                        <a href="#">I forgot my password</a>
                                    </div>
                                </div>

                                <div class="submit-login">
                                    <input type="submit" name="login" value="Log In" class="submit" >
                                </div>
                            </form>
                        </div>
                    </section>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <?php include('partial/footer.php');?>

  
