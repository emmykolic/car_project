<div class="header-top_area d-lg-block d-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="main-menu_area position-relative">
                    <nav class="main-nav">
                        <ul>
                            <li class="dropdown-holder active"><a href="index.php">Home</a>
                                <ul class="hm-dropdown">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li class="megamenu-holder "><a href="shop-left-sidebar.html">Shop <i class="ion-ios-arrow-down"></i></a>
                                <ul class="hm-megamenu">
                                    <li><span class="megamenu-title">Shop Page Layout</span>
                                        <ul>
                                            <li><a href="shop-grid-fullwidth.html">Grid Fullwidth</a></li>
                                            <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class="megamenu-title">Single Product Style</span>
                                        <ul>
                                            <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Gallery Right</a>
                                            </li>
                                            <li><a href="single-product-tab-style-left.html">Tab Style Left</a>
                                            </li>
                                            <li><a href="single-product-tab-style-right.html">Tab Style
                                                    Right</a>
                                            </li>
                                            <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="megamenu-title">Single Product Type</span>
                                        <ul>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                            <li><a href="single-product-group.html">Single Product Group</a>
                                            </li>
                                            <li><a href="single-product-variable.html">Single Product Variable</a>
                                            </li>
                                            <li><a href="single-product-affiliate.html">Single Product
                                                    Affiliate</a>
                                            </li>
                                            <li><a href="single-product-slider.html">Single Product Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Specials</a></li>
                            <li class=""><a href="javascript:void(0)">Pages <i class="ion-ios-arrow-down"></i></a>
                                <ul class="hm-dropdown">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Login | Register</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="about-us.html">About Us</a></li>
                            <li class=""><a href="contact.html">Contact</a></li>
                            <?php if (isset($site->uid)): ?>
                            <li class=""><a href="blog-left-sidebar.html">My Cars <i class="ion-ios-arrow-down"></i></a>
                                <ul class="hm-dropdown">
                                    <li class=""><a href="products.php">List</a></li>
                                    <li class=""><a href="products_create.php">Post A Car</a></li>
                                    <li class=""><a href="purchases.php"></a></li>
                                    <li class=""><a href="orders.php">Orders</a></li>
                                </ul>
                            </li>    
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <div class="ht-right_area">
                    <div class="ht-menu">
                        <ul>
                            <li><a href="javascript:void(0)">Currency<i class="fa fa-chevron-down"></i></a>
                                <ul class="ht-dropdown ht-currency">
                                    <li><a href="javascript:void(0)">€ EUR</a></li>
                                    <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                    <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Language <i class="fa fa-chevron-down"></i></a>
                                <ul class="ht-dropdown">
                                    <li class="active"><a href="javascript:void(0)"><img src="assets/images/menu/icon/1.jpg" alt="JB's Language Icon">English</a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/images/menu/icon/2.jpg" alt="JB's Language Icon">Français</a>
                                    </li>
                                </ul>
                            </li>
                            <?php if (isset($site->uid)): ?>
                            <li><a href="javascript:void(0)"><?=ucwords($site->user->name)?><i class="fa fa-chevron-down"></i></a>
                                <ul class="ht-dropdown ht-my_account">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active"><a href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a href="javascript:void(0)">Sign In / Sign Up<i class="fa fa-chevron-down"></i></a>
                                <ul class="ht-dropdown ht-my_account">
                                    <li><a href="register.php">Register</a></li>
                                    <li class="active"><a href="login.php">Login</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>