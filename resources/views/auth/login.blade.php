<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>B-Shop | Account</title>

    <!--SEO Meta Tags-->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="8Guild" />

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- Material & Socicon Icons Fonts -->
    <link href="{{asset('/stylesheets/vendor/socicon.min.css')}}" rel="stylesheet">
    <link href="{{asset('/stylesheets/vendor/material-icons.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Core -->
    <link href="{{asset('/stylesheets/vendor/bootstrap.min.css')}}" rel="stylesheet" media="screen">

    <!-- Slick Carousel Default Styles -->
    <link href="stylesheets/vendor/slick.css" rel="stylesheet" media="screen">

    <!-- Modal Default Styles -->
    <link href="stylesheets/vendor/magnific-popup.css" rel="stylesheet" media="screen">

    <!-- Offcanvas Plugin -->
    <link href="stylesheets/vendor/slidebars.min.css" rel="stylesheet" media="screen">

    <!-- All Theme Styles -->
    <link href="stylesheets/theme.min.css" rel="stylesheet" media="screen">

    <!--Modernizr / Detectizr-->
    <script src="js/vendor/modernizr.custom.js"></script>
    <script src="js/vendor/detectizr.min.js"></script>

</head>

<!-- Body -->
<!-- "is-preloader preloading" is a helper classes if preloader is enabled. -->
<body class="is-preloader preloading">

<!-- Preloader -->
<!--
    Data API:
    data-spinner - Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
    data-screenbg - Screen background color. Hex, RGB or RGBA colors
 -->
<div id="preloader" data-spinner="spinner2" data-screenbg="#fff"></div>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Modal -->
    <div class="modal fade" id="quickPreview" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-7">
                        <a href="#img01"><img src="img/product-gallery/01.jpg" alt="Thumb"></a>
                    </div>
                    <div class="col-sm-5">
                        <div class="single-item-info">
                            <div class="item-logo">
                                <img src="img/single-item-logo.png" alt="">
                            </div>
                            <div class="item-title">
                                OVERSIZED DRESS
                            </div>
                            <div class="item-sku">
                                Product Sku: 5110336
                            </div>
                            <div class="item-rating">
                                <img src="img/rating.png" alt="">
                                <span> (12 reviews)</span>
                            </div>
                            <div class="bages">
                                <span class="bage">Sale 50%</span>
                                <span class="bage bage-primary">New</span>
                            </div>
                            <div class="item-info">
                                Eternity bands are a classy and stylish innovation to storm the market. These are often gifted for a marriage anniversary or at the time of giving birth to a child.
                            </div>
                            <div class="radio-group color">
                                <div class="title">Choose Color</div>
                                <span class="selected" style="background-color: #cabeae;"></span>
                                <span style="background-color: #90b1db;"></span>
                                <span style="background-color: #000;"></span>
                            </div>
                            <div class="radio-group size">
                                <div class="title">Choose Size</div>
                                <span>XXL</span>
                                <span class="selected">XL</span>
                                <span>L</span>
                            </div>
                            <div class="cost">
                                $250 <span>$280</span>
                            </div>
                            <div class="action-tools">
                                <div class="select inline margin-bottom-none">
                                    <select name="select">
                                        <option>Qty 11</option>
                                        <option>Qty 12</option>
                                        <option>Qty 13</option>
                                    </select>
                                </div>

                                <a href="#" class="btn btn-gray right-icon margin-bottom-none">Add To Cart <i class="material-icons shopping_cart"></i></a>

                                <a href="#" class="btn btn-gray btn-iconed margin-bottom-none"><i class="material-icons favorite_border"></i></a>
                            </div>
                            <div class="category">Woman / Bodysuit</div>

                            <!-- Popular Tags -->
                            <div class="widget tags-list-widget">
                                <div class="tags-list">
                                    <a href="#">Clothes</a>
                                    <a href="#">Boots</a>
                                    <a href="#">Skirts</a>
                                </div>
                            </div><!-- Popular Tags END -->

                            <div class="social">
                                <div class="title">Share product</div>

                                <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-instagram"></i></a>
                                <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-facebook"></i></a>
                                <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-pinterest"></i></a>
                                <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- Modal END -->

    <div off-canvas="id-1 left push" class="off-canvas-cont">
        <div class="side-nav-tools">
            <a href="#">
                <i class="material-icons language"></i>
            </a>
            <a href="account-login.html">
                <i class="material-icons person"></i>
            </a>
            <a href="#">
                <i class="material-icons attach_money"></i>
            </a>

            <a href="#" class="offcanvas-toggle inner-toggle">
                <i class="material-icons close"></i>
            </a>
        </div>

        <div class="widget search margin-bottom-none">
            <i class="icon material-icons search"></i>
            <input type="text" class="form-control input-sm" placeholder="Search Shop">
        </div>

        <nav class="offcanvas-navigation" role="navigation" data-back-btn-text="Back">
            <div class="menu-site-menu-container">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Home</a>

                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="index.html">Hero Slider</a>
                            </li>
                            <li class="menu-item">
                                <a href="home-category-tiles.html">Category</a>
                            </li>
                            <li class="menu-item">
                                <a href="home-featured-products.html">Feature</a>
                            </li>
                            <li class="menu-item">
                                <a href="home-week-deals.html">Deals of the Week</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children current">
                        <a href="#">Shop</a>

                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop Pages</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-grid-3cols-sl.html">Grid 3 Cols Sidebar Left</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-2cols-sl.html">Grid 2 Cols Sidebar Left</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-3cols-sr.html">Grid 3 Cols Sidebar Right</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-2cols-sr.html">Grid 2 Cols Sidebar Right</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-4cols-ns.html">Grid 4 Cols No Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-3cols-ns.html">Grid 3 Cols No Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-2cols-ns.html">Grid 2 Cols No Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-sl.html">List Sidebar Left</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-sr.html">List Sidebar Right</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-ns.html">List No Sidebar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Categories</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="shop-cat-4cols.html">Grid 4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-cat-3cols.html">Grid 3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-cat-2cols.html">Grid 2 Columns</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Product Pages</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li>
                                        <a href="product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li>
                                        <a href="product-grouped.html">Product Grouped</a>
                                    </li>
                                    <li>
                                        <a href="product-affiliate.html">Product Affiliate</a>
                                    </li>
                                    <li>
                                        <a href="product-out-stock.html">Product Out of Stock</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Orders</a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="shopping-cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout-simple.html">Checkout Simple</a>
                                    </li>
                                    <li>
                                        <a href="checkout-wizard.html">Checkout Steps Wizard</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="products-compare.html">Products Comparison</a>
                            </li>

                            <li class="menu-item-has-children current">
                                <a href="#">Account</a>

                                <ul class="sub-menu">
                                    <li class="current">
                                        <a href="account-login.html">Log In / Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="account-wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="account-order-track.html">Track your Order</a>
                                    </li>
                                    <li>
                                        <a href="account-orders-list.html">Orders List</a>
                                    </li>
                                    <li>
                                        <a href="account-order-info.html">Order Information</a>
                                    </li>
                                    <li>
                                        <a href="account-user-info.html">User Information</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="blog-grid.html">Grid View</a>
                            </li>
                            <li>
                                <a href="blog-single.html">Single Post</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Gallery</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="gallery-masonry.html">Masonry Grid</a>
                            </li>
                            <li>
                                <a href="gallery-4cols.html">Grid 4 Columns</a>
                            </li>
                            <li>
                                <a href="gallery-3cols.html">Grid 3 Columns</a>
                            </li>
                            <li>
                                <a href="gallery-2cols.html">Grid 2 Columns</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="page-about.html">About Us</a>
                            </li>
                            <li>
                                <a href="page-faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="page-store-locator.html">Store Locator</a>
                            </li>
                            <li>
                                <a href="page-404.html">404</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="elements.html">Elements</a>
                    </li>

                    <li class="divider"></li>

                    <li class="menu-item-has-children">
                        <a href="#">Men</a>

                        <ul class="sub-menu">
                            <li class="title">Outerwear</li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Walking</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Hiking &amp; Trail</a></li>
                            <li><a href="#">Soccer</a></li>
                            <li><a href="#">Tennis</a></li>

                            <li class="divider"></li>

                            <li class="title">Clothing</li>
                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                            <li><a href="#">Long Sleeve Shirts</a></li>
                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Socks</a></li>
                            <li><a href="#">Accessories and Gear</a></li>
                            <li><a href="#">Recently Reduced Clothing</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">

                        <a href="#">Women</a>

                        <ul class="sub-menu">
                            <li class="title">Outerwear</li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Walking</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Hiking &amp; Trail</a></li>
                            <li><a href="#">Soccer</a></li>
                            <li><a href="#">Tennis</a></li>

                            <li class="divider"></li>

                            <li class="title">Clothing</li>
                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                            <li><a href="#">Long Sleeve Shirts</a></li>
                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Socks</a></li>
                            <li><a href="#">Accessories and Gear</a></li>
                            <li><a href="#">Recently Reduced Clothing</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">

                        <a href="#">Sales</a>

                        <ul class="sub-menu">
                            <li class="title">Outerwear</li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Walking</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Hiking &amp; Trail</a></li>
                            <li><a href="#">Soccer</a></li>
                            <li><a href="#">Tennis</a></li>

                            <li class="divider"></li>

                            <li class="title">Clothing</li>
                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                            <li><a href="#">Long Sleeve Shirts</a></li>
                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Socks</a></li>
                            <li><a href="#">Accessories and Gear</a></li>
                            <li><a href="#">Recently Reduced Clothing</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">

                        <a href="#">Shoes</a>

                        <ul class="sub-menu">
                            <li class="title">Outerwear</li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Walking</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Hiking &amp; Trail</a></li>
                            <li><a href="#">Soccer</a></li>
                            <li><a href="#">Tennis</a></li>

                            <li class="divider"></li>

                            <li class="title">Clothing</li>
                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                            <li><a href="#">Long Sleeve Shirts</a></li>
                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Socks</a></li>
                            <li><a href="#">Accessories and Gear</a></li>
                            <li><a href="#">Recently Reduced Clothing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div canvas="container">
        <!-- Backdrop for Canvas -->
        <div class="backdrop offcanvas-toggle"></div>

        <header class="header">

            <!-- Top Bar Section -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="text-primary">Welcome to B-Shop! Here is a free text! <i class="material-icons info_outline"></i></span>
                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="#" class="social socicon-instagram"></a>
                            <a href="#" class="social socicon-facebook"></a>
                            <a href="#" class="social socicon-pinterest"></a>
                            <a href="#" class="social socicon-instagram"></a>
                            <a href="#" class="social socicon-youtube"></a>
                            <a href="#" class="social socicon-dribbble"></a>
                        </div>
                        <div class="col-sm-4 text-right">
                            <ul class="tools">
                                <li class="dropdown">
                                    <a href="#">
                                        <i class="material-icons language"></i>
                                        <span class="hidden-md">Language</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li><a href="#">Russian</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Mandarin</a></li>
                                        <li><a href="#">Italian</a></li>
                                        <li><a href="#">Gorgean</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="material-icons person"></i>
                                        <span class="hidden-md">My Account</span>
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <a href="#">
                                        <span>$</span>
                                        <span class="hidden-md">Currency</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Top Bar Section END -->

            <!-- Navbar Section -->
            <div class="navbar">
                <div class="container">
                    <div class="navbar-inner">
                        <div class="column">

                            <!-- Main Navigation -->
                            <ul class="main-nav">
                                <!-- Main Navigation Level -->
                                <li class="nav-item dropdown lvl-1">
                                    <a href="#">Home</a>

                                    <ul class="sub-menu">
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2">
                                            <a href="index.html">Hero Slider</a>
                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2">
                                            <a href="home-category-tiles.html">Category Tiles</a>
                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2">
                                            <a href="home-featured-products.html">Featured Products</a>
                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2">
                                            <a href="home-week-deals.html">Deals of the Week</a>
                                        </li><!-- 2nd Navigation Level END -->
                                    </ul>
                                </li><!-- Main Navigation Level END -->
                                <!-- Main Navigation Level -->
                                <li class="nav-item dropdown lvl-1 current">
                                    <a href="#">Shop</a>

                                    <ul class="sub-menu">
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item dropdown lvl-2">
                                            <a href="#">Shop Pages</a>

                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-grid-3cols-sl.html">Grid 3 Cols Sidebar Left</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-2cols-sl.html">Grid 2 Cols Sidebar Left</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-3cols-sr.html">Grid 3 Cols Sidebar Right</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-2cols-sr.html">Grid 2 Cols Sidebar Right</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-4cols-ns.html">Grid 4 Cols No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-3cols-ns.html">Grid 3 Cols No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-grid-2cols-ns.html">Grid 2 Cols No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-sl.html">List Sidebar Left</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-sr.html">List Sidebar Right</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-ns.html">List No Sidebar</a>
                                                </li>
                                            </ul>
                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item dropdown lvl-2">
                                            <a href="#">Categories</a>

                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-cat-4cols.html">Grid 4 Columns</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cat-3cols.html">Grid 3 Columns</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cat-2cols.html">Grid 2 Columns</a>
                                                </li>
                                            </ul>
                                        </li><!-- 2nd Navigation Level END -->
                                        <li class="nav-item dropdown lvl-2">
                                            <a href="#">Product Pages</a>

                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="product-gallery-left.html">Product Gallery Left</a>
                                                </li>
                                                <li>
                                                    <a href="product-gallery-right.html">Product Gallery Right</a>
                                                </li>
                                                <li>
                                                    <a href="product-grouped.html">Product Grouped</a>
                                                </li>
                                                <li>
                                                    <a href="product-affiliate.html">Product Affiliate</a>
                                                </li>
                                                <li>
                                                    <a href="product-out-stock.html">Product Out of Stock</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item dropdown lvl-2">
                                            <a href="#">Orders</a>

                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shopping-cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout-simple.html">Checkout Simple</a>
                                                </li>
                                                <li>
                                                    <a href="checkout-wizard.html">Checkout Steps Wizard</a>
                                                </li>
                                            </ul>

                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2">
                                            <a href="products-compare.html">Products Comparison</a>
                                        </li><!-- 2nd Navigation Level END -->
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item dropdown lvl-2 current">
                                            <a href="#">Account</a>

                                            <ul class="sub-menu">
                                                <li class="current">
                                                    <a href="account-login.html">Log In / Sign Up</a>
                                                </li>
                                                <li>
                                                    <a href="account-wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="account-order-track.html">Track your Order</a>
                                                </li>
                                                <li>
                                                    <a href="account-orders-list.html">Orders List</a>
                                                </li>
                                                <li>
                                                    <a href="account-order-info.html">Order Information</a>
                                                </li>
                                                <li>
                                                    <a href="account-user-info.html">User Information</a>
                                                </li>
                                            </ul>
                                        </li><!-- 2nd Navigation Level END -->
                                    </ul>
                                </li><!-- Main Navigation Level END -->
                                <!-- Main Navigation Level -->
                                <li class="nav-item dropdown lvl-1">
                                    <a href="#">Blog</a>

                                    <ul class="sub-menu">
                                        <li class="nav-item lvl-2">
                                            <a href="blog-grid.html">Grid View</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="blog-single.html">Single Post</a>
                                        </li>
                                    </ul>
                                </li><!-- Main Navigation Level END-->
                                <li class="nav-item dropdown lvl-1">
                                    <a href="#">Gallery</a>

                                    <ul class="sub-menu">
                                        <li class="nav-item lvl-2">
                                            <a href="gallery-masonry.html">Masonry Grid</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="gallery-4cols.html">Grid 4 Columns</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="gallery-3cols.html">Grid 3 Columns</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="gallery-2cols.html">Grid 2 Columns</a>
                                        </li>
                                    </ul>
                                </li><!-- Main Navigation Level END-->
                                <li class="nav-item dropdown lvl-1">
                                    <a href="#">Pages</a>

                                    <ul class="sub-menu">
                                        <li class="nav-item lvl-2">
                                            <a href="page-about.html">About Us</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="page-faq.html">FAQ</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="page-store-locator.html">Store Locator</a>
                                        </li>
                                        <li class="nav-item lvl-2">
                                            <a href="page-404.html">404</a>
                                        </li>
                                    </ul>
                                </li><!-- Main Navigation Level END-->
                                <li class="nav-item lvl-1">
                                    <a href="elements.html">Elements</a>
                                </li><!-- Main Navigation Level END-->
                            </ul><!-- Main Navigation END -->
                        </div>

                        <div class="column text-center">
                            <!-- Main Logo -->
                            <a href="index.html" class="logo">
                                <img src="img/logo.png" alt="">
                            </a><!-- Main Logo END -->
                        </div>

                        <!-- Header Tools -->
                        <div class="column">
                            <div class="header-tools text-right">
                                <div class="widget search">
                                    <i class="icon material-icons search"></i>
                                    <input type="text" class="form-control input-sm" placeholder="Search Shop">
                                </div>

                                <a href="account-wishlist.html" class="header-tools-link wishlist">
                                    <i class="material-icons favorite"></i>
                                </a>

                                <!-- Cart dropdown element -->
                                <div class="cart-container dropdown">
                                    <a href="#" class="header-tools-link cart-link">
                                        <i class="material-icons shopping_cart"></i>
                                        <span class="counter">24</span>
                                    </a>

                                    <div class="sub-menu">
                                        <div class="widget cart-widget">
                                            <div class="widget-title">
                                                Latest Products
                                            </div>

                                            <ul class="cart-list">
                                                <!-- Cart List Item -->
                                                <li>
                                                    <a href="product-gallery-left.html" class="cart-thumb">
                                                        <img src="img/shop/cart-widget/01.jpg" alt="">
                                                    </a>

                                                    <div class="info-cont">
                                                        <a href="product-gallery-left.html" class="item-title">SUEDE-EFFECT JACKET</a>

                                                        <div class="category">
                                                            Skirts

                                                            <span class="cost">$ 140</span>
                                                        </div>
                                                    </div>
                                                </li><!-- Cart List Item END -->

                                                <!-- Cart List Item -->
                                                <li>
                                                    <a href="product-gallery-left.html" class="cart-thumb">
                                                        <img src="img/shop/cart-widget/02.jpg" alt="">
                                                    </a>

                                                    <div class="info-cont">
                                                        <a href="product-gallery-left.html" class="item-title">SUEDE-EFFECT JACKET</a>

                                                        <div class="category">
                                                            Skirts

                                                            <span class="cost">$140</span>
                                                        </div>
                                                    </div>
                                                </li><!-- Cart List Item END -->

                                                <!-- Cart Total -->
                                                <li>
                                                    <div class="total">
                                                        Total

                                                        <div class="cost">$80 0000</div>
                                                    </div>
                                                </li><!-- Cart Total END -->
                                            </ul>

                                            <a href="shopping-cart.html" class="btn btn-default btn-block margin-right-none">Go to cart</a>
                                            <a href="checkout-wizard.html" class="btn btn-default btn-block margin-right-none">Poceed to checkout</a>
                                        </div>
                                    </div>
                                </div><!-- Cart dropdown element END -->
                            </div>
                        </div><!-- Header Tools END -->
                    </div>
                </div>
            </div><!-- Navbar Section END -->

            <!-- Mega Menu -->
            <div class="mega-menu-container">
                <div class="container">
                    <div class="mega-menu-inner">
                        <div class="lvl-1">
                            <a href="#">New Arrivals</a>

                            <div class="mega-menu-wrap">
                                <div class="mega-menu">
                                    <div class="column-25">
                                        <div class="title">Outerwear</div>
                                        <ul>
                                            <li><a href="#">Running</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Walking</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Hiking &amp; Trail</a></li>
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Tennis</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-25">
                                        <div class="title">Clothing</div>
                                        <ul>
                                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                                            <li><a href="#">Long Sleeve Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Socks</a></li>
                                            <li><a href="#">Accessories and Gear</a></li>
                                            <li><a href="#">Recently Reduced Clothing</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-50">
                                        <div class="title">AW 2016</div>
                                        <div class="featured-area">
                                            <div class="feature-1">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/01.jpg" alt="">
                                                </a>
                                                <a href="#">New Arrivals</a>
                                            </div>
                                            <div class="feature-2">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/02.jpg" alt="">
                                                </a>
                                                <a href="#">New Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lvl-1">
                            <a href="#">Men<span class="bage bage-primary">New</span></a>

                            <div class="mega-menu-wrap">
                                <div class="mega-menu">
                                    <div class="column-25">
                                        <div class="title">Outerwear</div>
                                        <ul>
                                            <li><a href="#">Running</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Walking</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Hiking &amp; Trail</a></li>
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Tennis</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-25">
                                        <div class="title">Clothing</div>
                                        <ul>
                                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                                            <li><a href="#">Long Sleeve Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Socks</a></li>
                                            <li><a href="#">Accessories and Gear</a></li>
                                            <li><a href="#">Recently Reduced Clothing</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-50">
                                        <div class="title">AW 2016</div>
                                        <div class="featured-area">
                                            <div class="feature-1">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/03.jpg" alt="">
                                                </a>
                                                <a href="#">New Arrivals</a>
                                            </div>
                                            <div class="feature-2">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/04.jpg" alt="">
                                                </a>
                                                <a href="#">New Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lvl-1">
                            <a href="#">Women</a>

                            <div class="mega-menu-wrap">
                                <div class="mega-menu">
                                    <div class="column-25">
                                        <div class="title">Outerwear</div>
                                        <ul>
                                            <li><a href="#">Running</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Walking</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Hiking &amp; Trail</a></li>
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Tennis</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-25">
                                        <div class="title">Clothing</div>
                                        <ul>
                                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                                            <li><a href="#">Long Sleeve Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Socks</a></li>
                                            <li><a href="#">Accessories and Gear</a></li>
                                            <li><a href="#">Recently Reduced Clothing</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-50">
                                        <div class="title">AW 2016</div>
                                        <div class="featured-area">
                                            <div class="feature-1">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/01.jpg" alt="">
                                                </a>
                                                <a href="#">New Arrivals</a>
                                            </div>
                                            <div class="feature-2">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/02.jpg" alt="">
                                                </a>
                                                <a href="#">New Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lvl-1">
                            <a href="#">Sales</a>

                            <div class="mega-menu-wrap">
                                <div class="mega-menu">
                                    <div class="column-25">
                                        <div class="title">Outerwear</div>
                                        <ul>
                                            <li><a href="#">Running</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Walking</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Hiking &amp; Trail</a></li>
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Tennis</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-25">
                                        <div class="title">Clothing</div>
                                        <ul>
                                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                                            <li><a href="#">Long Sleeve Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Socks</a></li>
                                            <li><a href="#">Accessories and Gear</a></li>
                                            <li><a href="#">Recently Reduced Clothing</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-50">
                                        <div class="title">AW 2016</div>
                                        <div class="featured-area">
                                            <div class="feature-1">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/01.jpg" alt="">
                                                </a>
                                                <a href="#">New Arrivals</a>
                                            </div>
                                            <div class="feature-2">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/02.jpg" alt="">
                                                </a>
                                                <a href="#">New Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lvl-1">
                            <a href="#">Shoes</a>

                            <div class="mega-menu-wrap">
                                <div class="mega-menu">
                                    <div class="column-25">
                                        <div class="title">Outerwear</div>
                                        <ul>
                                            <li><a href="#">Running</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Training</a></li>
                                            <li><a href="#">Walking</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Hiking &amp; Trail</a></li>
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Tennis</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-25">
                                        <div class="title">Clothing</div>
                                        <ul>
                                            <li><a href="#">Short Sleeve &amp; Sleeveless Shirts</a></li>
                                            <li><a href="#">Long Sleeve Shirts</a></li>
                                            <li><a href="#">Jackets &amp; Hoodies</a></li>
                                            <li><a href="#">Pants</a></li>
                                            <li><a href="#">Socks</a></li>
                                            <li><a href="#">Accessories and Gear</a></li>
                                            <li><a href="#">Recently Reduced Clothing</a></li>
                                        </ul>
                                    </div>

                                    <div class="column-50">
                                        <div class="title">AW 2016</div>
                                        <div class="featured-area">
                                            <div class="feature-1">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/01.jpg" alt="">
                                                </a>
                                                <a href="#">New Arrivals</a>
                                            </div>
                                            <div class="feature-2">
                                                <a href="#" class="fear-image">
                                                    <img src="img/mega-menu/02.jpg" alt="">
                                                </a>
                                                <a href="#">New Lifestyle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Mega Menu END -->

            <!-- Mobile Tools -->
            <div class="mobile-view">
                <div class="container">
                    <!-- OffCanvas Toggle -->
                    <a href="#" class="offcanvas-toggle">
                        <i class="material-icons menu"></i>
                    </a>

                    <!-- Mobile View Logo -->
                    <a href="index.html" class="logo">
                        <img src="img/logo.png" alt="">
                    </a>

                    <div class="mobile-tools">
                        <!-- Wishlist Link -->
                        <a href="account-wishlist.html" class="wishlist">
                            <i class="material-icons favorite"></i>
                        </a>

                        <!-- Cart dropdown element -->
                        <div class="cart-container">
                            <a href="shopping-cart.html" class="cart-link">
                                <i class="material-icons shopping_cart"></i>
                                <span class="counter">24</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Page Title -->
            <div class="page-title">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                        <a href="#">Shop</a>
                        <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                        <span>Account</span>
                    </div>

                    <div class="title pull-right">Login</div>
                </div>
            </div><!-- Page Title END -->

            <!-- Content -->
            <div class="container text-center">
                <h5 class="text-default margin-bottom-2x">Login With Your Account</h5>


                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

                <hr class="margin-top-2x margin-bottom-2x">

                <div class="row">
                    <div class="col-md-6">
                        <img src="img/login_01.png" style="width: auto" alt="">
                        <h5>Login With Your Email</h5>
                        <p>Being able to foresee an unfortunate fact of life like death, disasters, illnesses, etc. through a dream is very common. </p>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" class="form-control text-center" placeholder="Enter your email">
                                <input type="text" class="form-control text-center" placeholder="Enter your password">
                                <a href="#" class="btn btn-default btn-block margin-right-none">Login</a>
                                <div>
                                    <label class="checkbox pull-left">
                                        <input type="checkbox"> Save Password
                                    </label>

                                    <a href="#" class="underline-link pull-right">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 margin-bottom-2x">
                        <img src="img/login_02.png" style="width: auto" alt="">
                        <h5>Register New Account</h5>
                        <p>Being able to foresee an unfortunate fact of life like death, disasters, illnesses, etc. through a dream is very common. </p>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" class="form-control text-center" placeholder="Enter your name">
                                <input type="text" class="form-control text-center" placeholder="Enter your email">
                                <input type="text" class="form-control text-center" placeholder="Enter your password">
                                <input type="text" class="form-control text-center" placeholder="Enter your password again">
                                <a href="#" class="btn btn-default btn-block margin-right-none">Register</a>
                                <div>
                                    <label class="checkbox pull-left">
                                        <input type="checkbox"> Subscribe for our news
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Content END -->
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Widget Categories -->
                        <div class="widget categories-widget">
                            <div class="widget-title">
                                Help
                            </div>

                            <ul class="cat-list">
                                <li>
                                    <a href="#" title="">Payment</a>
                                </li>
                                <li>
                                    <a href="#" title="">Delivery</a>
                                </li>
                                <li>
                                    <a href="#" title="">Returns &amp; Refund</a>
                                </li>
                                <li>
                                    <a href="#" title="">Customer Support</a>
                                </li>
                            </ul>
                        </div><!-- Widget Categories END -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <!-- Latest Product List -->
                        <div class="widget service-list">
                            <div class="widget-title">
                                Customer Service
                            </div>

                            <ul>
                                <li>
                                    <div style="margin-bottom: 7px;">Find Store</div>
                                    <a href="#" class="btn btn-gray btn-iconed btn-lg"><i class="material-icons place"></i></a>
                                </li>
                                <li>
                                    <div style="margin-bottom: 7px;">Gift Cards</div>
                                    <a href="#" class="btn btn-gray btn-iconed btn-lg"><i class="material-icons local_activity"></i></a>
                                </li>
                            </ul>
                        </div><!-- Latest Product List END -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <!-- Categories Filter -->
                        <div class="widget">
                            <div class="widget-title">
                                Get more with B-Shop
                            </div>

                            <a href="#" class="market-btn btn-appstore" style="background-image: url(img/market-btns/appstore.png);"><span>Download on the</span>App Store</a>

                            <a href="#" class="market-btn btn-playstore" style="background-image: url(img/market-btns/playstore.png);"><span>Download it from</span>Play Store</a>
                        </div><!-- Categories Filter END -->
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <!-- Categories Filter -->
                        <div class="widget">
                            <div class="widget-title">
                                Stay in touch
                            </div>

                            <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-instagram"></i></a>
                            <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-facebook"></i></a>
                            <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-pinterest"></i></a>
                            <a href="#" class="btn btn-gray btn-iconed"><i class="socicon-youtube"></i></a>
                        </div><!-- Categories Filter END -->
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="column">
                        <p>&copy; B-Shop 2015 - 2017. Made by <a href="http://8guild.com/" target="_blank">8Guild</a> with <i class="fa fa-heart text-danger"></i> love.</p>
                    </div><!-- .column -->

                    <div class="column">
                        <div class="cards">
                            <img src="img/cards.png" alt="Credit Cards">
                        </div>
                    </div><!-- .column -->
                </div>
            </div><!-- .copyright -->
        </footer>
    </div>
</div><!-- Page Wrapper END -->

<!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
<script src="js/vendor/jquery-2.1.4.min.js"></script>
<script src="js/vendor/preloader.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/nouislider.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/wNumb.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/slidebars.min.js"></script>
<script src="js/vendor/jquery.themepunch.revolution.min.js"></script>

<script src="js/scripts.js"></script>

</body>
</html>