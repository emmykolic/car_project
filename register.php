<?php 
include("config.php");
$site->set_token();
include("includes/header.php");
?>
   <div class="uren-login-register_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-xs-12">
                        <form action="register_action.php" method="post">
                            <div class="login-form">
                                <?= $site->get_alert(); ?>
                                <h4 class="login-title">Register</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--20">
                                        <label>FullName</label>
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="<?=$site->token?>" class="uren-register_btn">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php include("includes/footer.php"); ?>