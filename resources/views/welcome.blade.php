<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>B-Shop | Hero Slider</title>

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
    <link href="{{asset('/stylesheets/vendor/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Slick Carousel Default Styles -->
    <link href="{{asset('/stylesheets/vendor/slick.css')}}" rel="stylesheet" media="screen">

    <!-- Modal Default Styles -->
    <link href="{{asset('/stylesheets/vendor/magnific-popup.css')}}" rel="stylesheet" media="screen">

    <!-- Offcanvas Plugin -->
    <link href="{{asset('/stylesheets/vendor/slidebars.min.css')}}" rel="stylesheet" media="screen">

    <!-- Revolution Slider Plugin -->
    <link href="{{asset('/stylesheets/vendor/layers.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/stylesheets/vendor/settings.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/stylesheets/vendor/navigation.css')}}" rel="stylesheet" media="screen">

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
                    <li class="menu-item menu-item-has-children current">
                        <a href="#">Home</a>

                        <ul class="sub-menu">
                            <li class="menu-item current">
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

                    <li class="menu-item menu-item-has-children">
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

                            <li class="menu-item-has-children">
                                <a href="#">Account</a>

                                <ul class="sub-menu">
                                    <li>
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
                                <li class="nav-item dropdown lvl-1 current">
                                    <a href="#">Home</a>

                                    <ul class="sub-menu">
                                        <!-- 2nd Navigation Level -->
                                        <li class="nav-item lvl-2 current">
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
                                <li class="nav-item dropdown lvl-1">
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
                                        <li class="nav-item dropdown lvl-2">
                                            <a href="#">Account</a>

                                            <ul class="sub-menu">
                                                <li>
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
            <section class="fw-setion">
                <div class="rev_slider_wrapper">
                    <div id="slider1" class="rev_slider"  data-version="5.0">
                        <ul>
                            <li data-transition="fade">

                                <img src="img/slider/01.jpg"  alt="">

                                <div class="tp-caption rs-parallaxlevel-2"
                                     data-x="center" data-hoffset="['0','50','20','30']"
                                     data-y="center" data-voffset="['30','50','25','80']"
                                     data-fontsize="['173','120','95','60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="600"

                                     style="font-style: italic;">Autumn
                                </div>

                                <div class="tp-caption rs-parallaxlevel-1"
                                     data-x="center" data-hoffset="['0','0','0','0']"
                                     data-y="center" data-voffset="['0','0','0','0']"
                                     data-width=“auto”
                                     data-height=“auto”
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="1400"

                                     style="color: #efbb1d;">

                                    <img src="img/slider/01-1.png" alt="" data-ww="270" data-hh="728" data-no-retina>
                                </div>

                                <div class="tp-caption rs-parallaxlevel-3"
                                     data-x="center" data-hoffset="['0','0','0','0']"
                                     data-y="center" data-voffset="['-70','-30','-35','40']"
                                     data-fontsize="['173','120','95','60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="2000"

                                     style="color: #fff;">2016
                                </div>

                                <div class="tp-caption"
                                     data-x="center" data-hoffset="['0','0','0','0']"
                                     data-y="center" data-voffset="['160','150','125','180']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="500">

                                    <a href="http://8guild.com" class="btn btn-arrow">Shop New Collection Now</a>
                                </div>
                            </li>

                            <li data-transition="fade">

                                <img src="img/slider/02.jpg"  alt="">

                                <div class="tp-caption rs-parallaxlevel-1"
                                     data-x="right" data-hoffset="['460','230','160','70']"
                                     data-y="center" data-voffset="['-80','-30','-35','40']"
                                     data-fontsize="['77','50','45','30']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="800"

                                     style="color: #efbb1d;">Trending
                                </div>

                                <div class="tp-caption rs-parallaxlevel-2"
                                     data-x="right" data-hoffset="['200','50','20','30']"
                                     data-y="center" data-voffset="['30','50','25','80']"
                                     data-fontsize="['173','120','95','60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="500"

                                     style="font-style: italic;">MakeUp
                                </div>

                                <div class="tp-caption"
                                     data-x="right" data-hoffset="['380','150','100','40']"
                                     data-y="center" data-voffset="['200','150','125','180']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="1000">

                                    <a href="http://8guild.com" class="btn btn-arrow">Shop New Collection Now</a>
                                </div>
                            </li>

                            <li data-transition="fade">

                                <img src="img/slider/03.jpg"  alt="">

                                <div class="tp-caption tp-resizeme rs-parallaxlevel-1"
                                     data-x="['left','left','center','center']" data-hoffset="['170','130','0','0']"
                                     data-y="center" data-voffset="['20','-30','-80','-40']"
                                     data-fontsize="['246','120','45','30']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="200"

                                     style="color: #efbb1d;">2017
                                </div>

                                <div class="tp-caption rs-parallaxlevel-2"
                                     data-x="['left','left','center','center']" data-hoffset="['270','180','0','0']"
                                     data-y="center" data-voffset="['200','70','80','80']"
                                     data-fontsize="['173','100','95','60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="500"

                                     style="font-style: italic;">Sportwear
                                </div>

                                <div class="tp-caption"
                                     data-x="center"
                                     data-y="center"
                                     data-hoffset="['0','0','0','0']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="500">

                                    <a href="http://8guild.com" class="btn btn-arrow">Shop New Collection Now</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <!-- Block Title -->
                <h2 class="block-title text-ceter margin-top-3x margin-bottom-2x">
                    Categories
                    <small>All you need</small>
                </h2><!-- Block Title END -->

                <!-- Item Carousel -->
                <div class="items-carousel" data-slick='{"arrows": true, "dots": false, }'>
                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/01.jpg" alt="">
                        </a>
                        <div class="tile-title">Gymwear</div>
                    </div><!-- Category Tile END -->

                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/02.jpg" alt="">
                        </a>
                        <div class="tile-title">Bags</div>
                    </div><!-- Category Tile END -->

                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/03.jpg" alt="">
                        </a>
                        <div class="tile-title">Outerwear</div>
                    </div><!-- Category Tile END -->

                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/04.jpg" alt="">
                        </a>
                        <div class="tile-title">Shoes</div>
                    </div><!-- Category Tile END -->

                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/05.jpg" alt="">
                        </a>
                        <div class="tile-title">Jeans</div>
                    </div><!-- Category Tile END -->

                    <!-- Category Tile -->
                    <div class="tile tile-category">
                        <a href="#" class="preview-box">
                            <img src="img/tiles/category/06.jpg" alt="">
                        </a>
                        <div class="tile-title">Accessories</div>
                    </div><!-- Category Tile END -->
                </div><!-- Item Carousel END -->
            </section>

            <section class="container margin-top-3x margin-bottom-3x">
                <!-- Block Title -->
                <h2 class="block-title text-left margin-bottom-2x">
                    New Arrivals
                    <small>aw 2016</small>
                </h2><!-- Block Title END -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Shop Grid Tile -->
                                <div class="tile">
                                    <div class="preview-box">
                                        <div class="preview-carousel" data-slick='{"arrows": false, "dots": true}'>
                                            <img src="img/tiles/slider-color/01.jpg" data-color="#8a7b50" alt="">
                                            <img src="img/tiles/slider-color/02.jpg" data-color="#e9e4e0" alt="">
                                        </div>

                                        <div class="preview-meta">
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tile-title">
                                        <a href="product-gallery-left.html">Oversize patchwork parka</a>
                                    </div>

                                    <div class="tile-meta">
                                        <div class="meta-top">
                                            <a href="#" class="category">Outwear</a>
                                            <span class="cost">$ 799</span>
                                        </div>
                                        <div class="meta-bottom">
                                            <img src="img/rating.png" class="raty" alt="">
                                        </div>
                                    </div>
                                </div><!-- Shop Grid Tile END -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Shop Grid Tile -->
                                <div class="tile">
                                    <div class="preview-box">
                                        <div class="preview-carousel" data-slick='{arrows": true, "dots": false}'>
                                            <img src="img/tiles/slider-carousel/01.jpg" alt="">
                                            <img src="img/tiles/slider-carousel/02.jpg" alt="">
                                            <img src="img/tiles/slider-carousel/03.jpg" alt="">
                                        </div>

                                        <div class="preview-meta">
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tile-title">
                                        <a href="product-gallery-left.html">QUILTED ANORAK</a>
                                    </div>

                                    <div class="tile-meta">
                                        <div class="meta-top">
                                            <a href="#" class="category">Outwear</a>
                                            <span class="cost">$ 399</span>
                                        </div>
                                        <div class="meta-bottom">
                                            <img src="img/rating.png" class="raty" alt="">
                                        </div>
                                    </div>
                                </div><!-- Shop Grid Tile END -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Shop Grid Tile -->
                                <div class="tile">
                                    <div class="preview-box">
                                        <img src="img/tiles/01.jpg" alt="">

                                        <div class="preview-meta">
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tile-title">
                                        <a href="product-gallery-left.html">ASYMMETRIC T-SHIRT</a>
                                    </div>

                                    <div class="tile-meta">
                                        <div class="meta-top">
                                            <a href="#" class="category">T-shirt</a>
                                            <span class="cost">$ 60</span>
                                        </div>
                                    </div>
                                </div><!-- Shop Grid Tile END -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Shop Grid Tile -->
                                <div class="tile">
                                    <div class="preview-box">
                                        <img src="img/tiles/02.jpg" alt="">

                                        <span class="bage">Sale 50%</span>

                                        <div class="preview-meta">
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tile-title">
                                        <a href="product-gallery-left.html">Zipped Jacket</a>
                                    </div>

                                    <div class="tile-meta">
                                        <div class="meta-top">
                                            <a href="#" class="category">Gymwear</a>
                                            <span class="cost">$ 199</span>
                                        </div>
                                        <div class="meta-bottom">
                                            <img src="img/rating.png" class="raty" alt="">
                                        </div>
                                    </div>
                                </div><!-- Shop Grid Tile END -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Shop Grid Tile -->
                        <div class="tile">
                            <div class="preview-box">
                                <img src="img/tiles/10.jpg" alt="">

                                <div class="preview-meta">
                                    <div>
                                        <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                    </div>
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="tile-title">
                                <a href="#">ASYMMETRIC T-SHIRT</a>
                            </div>

                            <div class="tile-meta">
                                <div class="meta-top">
                                    <a href="#" class="category">T-shirt</a>
                                    <span class="cost">$ 60</span>
                                </div>
                            </div>
                        </div><!-- Shop Grid Tile END -->
                    </div>
                </div>
            </section>

            <section class="fw-section no-cover bg-gray padding-top-4x padding-bottom-2x" style="background-image: url(img/homes/02.jpg); background-position: center bottom;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding-top-3x">
                                        <span>Explore editors looks</span>
                                        <h2>Almost Summer Editorial</h2>

                                        <p>Most people consider hair combing a routine activity. There are people who keep a particular hair style throughout their life.</p>

                                        <a href="#" class="btn btn-arrow">Shop All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Shop Grid Tile -->
                                    <div class="tile">
                                        <div class="preview-box">
                                            <img src="img/tiles/12.jpg" alt="">

                                            <div class="preview-meta">
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tile-title">
                                            <a href="#">FRINGED JACKET</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <a href="#" class="category">Basics</a>
                                                <span class="cost">$ 260</span>
                                            </div>
                                            <div class="meta-bottom">
                                                <img src="img/rating.png" class="raty" alt="">
                                            </div>
                                        </div>
                                    </div><!-- Shop Grid Tile END -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Shop Grid Tile -->
                                    <div class="tile">
                                        <div class="preview-box">
                                            <img src="img/tiles/13.jpg" alt="">

                                            <span class="bage">Sale 50%</span>

                                            <div class="preview-meta">
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons favorite_border"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="modal" data-target="#quickPreview" class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons swap_horiz"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i class="material-icons shopping_cart"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tile-title">
                                            <a href="#">MILITARY STYLE COAT</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <a href="#" class="category">Basics</a>
                                                <span class="cost">$ 120</span>
                                            </div>
                                            <div class="meta-bottom">
                                                <img src="img/rating.png" class="raty" alt="">
                                            </div>
                                        </div>
                                    </div><!-- Shop Grid Tile END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section no-cover padding-top-4x margin-bottom-2x" style="background-image: url(img/homes/01.jpg)">
                <div class="container">
                    <!-- Block Title -->
                    <h2 class="block-title text-left margin-bottom-2x">
                        Latest News
                        <small>Read our blog</small>
                    </h2><!-- Block Title END -->

                    <div>
                        <section class="fw-section">
                            <!-- Grid -->
                            <div class="grid masonry-grid col-3">
                                <div class="grid-sizer"></div>
                                <div class="gutter-sizer"></div>

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="preview-box">
                                            <img src="img/blog/01.jpg" alt="">
                                        </div>

                                        <div class="tile-title">
                                            <a href="blog-single.html">What to Wear to Each of Summer’s Hottest Concerts</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">Dressing for work on the best of days is a struggle. You’re never quite sure what is appropriate at your office. Plus, you never seem to have anything.</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="tile-title">
                                            <a href="blog-single.html">One-Shoulder Tops Are the New Off-the-Shoulder Tops: Here’s Why</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">We didn’t invent one-shoulder dressing simply because we’re desperate for an alternative to the now supersaturated off-the-shoulder trend.</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="preview-box">
                                            <img src="img/blog/03.jpg" alt="">
                                        </div>

                                        <div class="tile-title">
                                            <a href="blog-single.html">What Curling Irons Are The Best Ones</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">Dressing for work on the best of days is a struggle. You’re never quite sure what is appropriate at your office. Plus, you never seem to have anything.</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="tile-title">
                                            <a href="blog-single.html">What to Wear to Each of Summer’s Hottest Concerts</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">Dressing for work on the best of days is a struggle. You’re never quite sure what is appropriate at your office. Plus, you never seem to have anything.</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->
                            </div><!-- Grid END -->
                        </section>
                    </div>
                </div>
            </section>

            <section class="container">
                <!-- Elements block -->
                <div class="row margin-bottom-3x">
                    <div class="margin-top-2x hidden-sm hidden-xs"></div>
                    <div class="col-sm-4">
                        <div class="box-with-icon text-center">
                            <div class="bwi-inner">
                                <div class="bwi-icon">
                                    <img src="img/bwi-img/03.png" alt="">
                                </div>
                                <h3 class="bwi-title">Return &amp; Exchange</h3>
                                <p class="bwi-text">The Myspace page defines the individual, his or her characteristics, traits, personal choices and the overall personality of the person.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box-with-icon text-center">
                            <div class="bwi-inner">
                                <div class="bwi-icon">
                                    <img src="img/bwi-img/02.png" alt="">
                                </div>
                                <h3 class="bwi-title">Live Support</h3>
                                <p class="bwi-text">The Myspace page defines the individual, his or her characteristics, traits, personal choices and the overall personality of the person.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box-with-icon text-center">
                            <div class="bwi-inner">
                                <div class="bwi-icon">
                                    <img src="img/bwi-img/01.png" alt="">
                                </div>
                                <h3 class="bwi-title">Gift Card Up To 50%</h3>
                                <p class="bwi-text">The Myspace page defines the individual, his or her characteristics, traits, personal choices and the overall personality of the person.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Elements block -->
            </section>

            <section class="fw-section bg-default margin-bottom-3x">
                <!-- Item Carousel -->
                <div class="items-carousel" data-slick='{"arrows": false, "dots": false, "slidesToShow": 6, "autoplay": true, "autoplaySpeed": 2000}'>
                    <img src="img/logos/01.png" alt="">
                    <img src="img/logos/02.png" alt="">
                    <img src="img/logos/03.png" alt="">
                    <img src="img/logos/04.png" alt="">
                    <img src="img/logos/05.png" alt="">
                    <img src="img/logos/06.png" alt="">
                    <img src="img/logos/07.png" alt="">
                    <img src="img/logos/08.png" alt="">
                    <img src="img/logos/09.png" alt="">
                </div><!-- Item Carousel END -->
            </section>

            <section class="fw-section margin-bottom-3x">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="tile tile-banner">
                                <a href="#" class="preview-box">
                                    <img src="img/tiles/banner/01.jpg" alt="">

                                    <div class="banner-meta text-light text-center">
                                        <h4 class="title">Cartoon Bags</h4>
                                        <span>Explore Must Have Bags</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="tile tile-banner">
                                <a href="#" class="preview-box">
                                    <img src="img/tiles/banner/02.jpg" alt="">

                                    <div class="banner-meta text-light text-center">
                                        <h4 class="title">New Lifestyle</h4>
                                        <span>Explore Must Have Bags</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="tile tile-banner">
                                <a href="#" class="preview-box">
                                    <img src="img/tiles/banner/03.jpg" alt="">

                                    <div class="banner-meta text-light text-center">
                                        <h4 class="title">Back to 80`s</h4>
                                        <span>Explore Must Have Bags</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section">
                <div class="container-fluid">
                    <!-- Block Title -->
                    <h2 class="block-title text-center margin-bottom-2x">
                        Our Insta
                        <small>Follow Us</small>
                    </h2><!-- Block Title END -->

                    <div class="row">
                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/01.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/02.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/04.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/03.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/05.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/06.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/07.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/08.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/09.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/10.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/11.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>

                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="#" class="preview-box">
                                    <img src="img/insta/12.jpg" alt="">

                                    <span class="insta-meta" style="margin-left: -25px;">
                      <i class="material-icons favorite"></i>
                      345
                    </span>
                                    <span class="insta-meta" style="margin-left: 25px;">
                      <i class="material-icons mode_comment"></i>
                      76
                    </span>
                                </a>
                            </div><!-- Insta Tile END -->
                        </div>
                    </div>
                </div>
            </section>

            <section class="fw-section margin-top-1x padding-top-3x padding-bottom-3x" style="background-image: url(img/homes/03.jpg)">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-default">Newsletter Sign Up</h4>
                            <p>Just fill in your details below and let us keep you up to date with the latest news, events and stories from Sophie Hulme</p>

                            <input type="text" class="form-control text-center margin-bottom-none" placeholder="Enter your name">
                            <input type="text" class="form-control text-center" style="margin-top: 10px" placeholder="Enter your email">

                            <a href="#" class="btn btn-arrow margin-right-none">Subscribe</a>
                        </div>
                    </div>
                </div>
            </section>
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
<script src="js/vendor/wNumb.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/slidebars.min.js"></script>
<script src="js/vendor/jquery.themepunch.tools.min.js"></script>
<script src="js/vendor/jquery.themepunch.revolution.min.js"></script>

<script src="js/scripts.js"></script>

</body>
</html>
