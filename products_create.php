<?php 
include_once "config.php";
$site->auth();
$site->set_token();
include_once 'includes/header.php'; 
?>       
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Create Products</h2>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li class="active">Create Products</li>
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
                        <form action="products_create_action.php" method="post">
                            <div class="login-form">
                                <?= $site->get_alert(); ?>
                                <h4 class="login-title">Create Products</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Products Name*</label>
                                        <input type="text" placeholder="Products Name" name="name" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Price</label>
                                        <input type="number" placeholder="Price" name="price" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Description</label>
                                        <textarea placeholder="Description" name="description" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Brand</label>
                                        <input type="text" placeholder="Eg(Toyota)" name="brand" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Model</label>
                                        <input type="text" placeholder="Eg(HighLander 2020)" name="model" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Available Qty</label>
                                        <input type="number" placeholder="Eg()" name="quantity" required>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="<?=$site->token?>" class="uren-login_btn">Contiune</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include_once 'includes/footer.php'; ?>   