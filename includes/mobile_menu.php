<div class="mobile-menu_wrapper" id="mobileMenu">
    <div class="offcanvas-menu-inner">
        <div class="container">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="offcanvas-inner_search">
                <form action="#" class="inner-searchbox">
                    <input type="text" placeholder="Search for item...">
                    <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
            <nav class="offcanvas-navigation">
                <ul class="mobile-menu">
                    <li class="menu-item-has-children active"><a href="index.php"><span
                            class="mm-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">
                                    <span class="mm-text">Home One</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-2.html">
                                    <span class="mm-text">Home Two</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html">
                                    <span class="mm-text">Home Three</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-left-sidebar.html">
                            <span class="mm-text">Shop</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="shop-left-sidebar.html">
                                    <span class="mm-text">Grid View</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-grid-fullwidth.html">
                                            <span class="mm-text">Column Three</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-4-column.html">
                                            <span class="mm-text">Column Four</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="shop-list-left-sidebar.html">
                                    <span class="mm-text">Shop List</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-list-fullwidth.html">
                                            <span class="mm-text">Full Width</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-list-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop-list-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="single-product-gallery-left.html">
                                    <span class="mm-text">Single Product Style</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="single-product-gallery-left.html">
                                            <span class="mm-text">Gallery Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-gallery-right.html">
                                            <span class="mm-text">Gallery Right</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-tab-style-left.html">
                                            <span class="mm-text">Tab Style Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-tab-style-right.html">
                                            <span class="mm-text">Tab Style Right</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sticky-left.html">
                                            <span class="mm-text">Sticky Left</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sticky-right.html">
                                            <span class="mm-text">Sticky Right</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="single-product.html">
                                    <span class="mm-text">Single Product Type</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="single-product.html">
                                            <span class="mm-text">Single Product</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-sale.html">
                                            <span class="mm-text">Single Product Sale</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-group.html">
                                            <span class="mm-text">Single Product Group</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-variable.html">
                                            <span class="mm-text">Single Product Variable</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-affiliate.html">
                                            <span class="mm-text">Single Product Affiliate</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single-product-slider.html">
                                            <span class="mm-text">Single Product Slider</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php if (isset($site->uid)):?>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">
                            <span class="mm-text">My Cars</span>
                        </a>
                        <ul class="sub-menu">
                                    <li class=""><a href="products.php">List</a></li>
                                    <li class=""><a href="products_create.php">Post A Car</a></li>
                                    <li class=""><a href="purchases.php"></a></li>
                                    <li class=""><a href="orders.php">Orders</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="blog-list-left-sidebar.html">
                                    <span class="mm-text">List View</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-list-fullwidth.html">
                                            <span class="mm-text">List Fullwidth</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-list-left-sidebar.html">
                                            <span class="mm-text">List Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-list-right-sidebar.html">
                                            <span class="mm-text">List Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="blog-details-left-sidebar.html">
                                    <span class="mm-text">Blog Details</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-details-left-sidebar.html">
                                            <span class="mm-text">Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details-right-sidebar.html">
                                            <span class="mm-text">Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children has-children">
                                <a href="blog-gallery-format.html">
                                    <span class="mm-text">Blog Format</span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-gallery-format.html">
                                            <span class="mm-text">Gallery Format</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-audio-format.html">
                                            <span class="mm-text">Audio Format</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-video-format.html">
                                            <span class="mm-text">Video Format</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="menu-item-has-children">
                        <a href="index.html">
                            <span class="mm-text">Pages</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="my-account.html">
                                    <span class="mm-text">My Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="login-register.html">
                                    <span class="mm-text">Login | Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    <span class="mm-text">Wishlist</span>
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    <span class="mm-text">Cart</span>
                                </a>
                            </li>
                            <li>
                                <a href="checkout.html">
                                    <span class="mm-text">Checkout</span>
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    <span class="mm-text">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="faq.html">
                                    <span class="mm-text">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <span class="mm-text">Error 404</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav class="offcanvas-navigation user-setting_area">
                <ul class="mobile-menu">
                    <?php if (isset($site->uid)): ?>
                    <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                            class="mm-text"><?=ucwords($site->user->name) ?></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="dashboard.php">
                                    <span class="mm-text">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    <span class="mm-text">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                            class="mm-text">User
                            Setting</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="register.php">
                                    <span class="mm-text">Sign Up</span>
                                </a>
                            </li>
                            <li>
                                <a href="login.php">
                                    <span class="mm-text">Sign In</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                            class="mm-text">Currency</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">EUR €</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">USD $</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                            class="mm-text">Language</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Français</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Romanian</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="mm-text">Japanese</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>