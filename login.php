<?php 
include_once "config.php";
$site->set_token();
include_once 'includes/header.php'; ?>       
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Other</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login & Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->
        <!-- Begin Uren's Login Register Area -->
        <div class="uren-login-register_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-4 col-md-4 col-xs-12">
                        <!-- Login Form s-->
                        <form action="login_action.php" method="post">
                            <div class="login-form">
                                <?= $site->get_alert(); ?>
                                <h4 class="login-title">Login</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box"> 
                                            <input type="checkbox" id="remember_me" name="remember" value="remember">
                                            <label for="remember_me">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="forgot.php"> Forgotten pasward?</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="<?=$site->token?>" class="uren-login_btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include_once 'includes/footer.php'; ?>   