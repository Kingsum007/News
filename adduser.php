<?php
include('partial/header.php');
?>
<section class="section login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="section-login">
                    <div id="login-modal" class="login">
                        <div class="form-title">
                            <h4>Sign Up!</h4>

                        </div>

                        <form method="post" action="admin/save.php" enctype="multipart/form-data">
                            <div class="email-wrap">
                                <label for="user-email">User Name</label>

                                <input type="text" size="30" value="" class="input" id="user-email" name="username" placeholder="No Spaces">

                            </div>
                            <div class="email-wrap">
                                <label for="user-email">Your email address</label>
                                <input type="email" size="30" value="" class="input" id="user-email" name="email">
                            </div>
                            <div class="pass-wrap">
                                <label for="user-pass">Password</label>
                                <input type="password" size="30" value="" class="input" id="user-pass" name="password">
                            </div>
                            <div class="pass-wrap">
                                <label for="user-pass">Confirm Password</label>
                                <input type="password" size="30" value="" class="input" id="user-pass" name="conf_password">
                            </div>
                            <div class="input-wrap">
                            <label for="img">Avatar</label>
                                <input type="file"  name="img"  class="input" style="margin:5px;">
                            </div>
                            <div class="submit-login">
                                <input type="submit" name="signup" value="Sign Up" class="submit">
                            </div>
                        </form>
                    </div>
                </section>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<?php
include('partial/footer.php');
?>