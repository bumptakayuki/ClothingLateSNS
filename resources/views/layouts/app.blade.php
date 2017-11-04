<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pocket Stylist</title>

    <!--SEO Meta Tags-->
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="8Guild"/>

    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

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

<body class="is-preloader preloading">


<div id="preloader" data-spinner="spinner2" data-screenbg="#fff"></div>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Modal -->
    <div class="modal fade" id="quickPreview" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
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
                                Eternity bands are a classy and stylish innovation to storm the market. These are often
                                gifted for a marriage anniversary or at the time of giving birth to a child.
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

                                <a href="#" class="btn btn-gray right-icon margin-bottom-none">Add To Cart <i
                                            class="material-icons shopping_cart"></i></a>

                                <a href="#" class="btn btn-gray btn-iconed margin-bottom-none"><i
                                            class="material-icons favorite_border"></i></a>
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
                    <li class="menu-item-has-children">
                        <a href="#">Account</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="my_page">
                                    MyPage
                                </a>
                            </li>
                            <li>
                                <a href="gallery-4cols.html">
                                     <span class="hidden-md">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </span>

                                </a>
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
                            <span class="text-primary">Welcome to B-Shop! Here is a free text! <i
                                        class="material-icons info_outline"></i></span>
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

                            <li class="dropdown">
                                <a href="#">
                                    <i class="material-icons person"></i>

                                    <a href="#">
                                        <span class="hidden-md">Account</span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li><a href="#">
                                                <a href="my_page">
                                                    MyPage
                                                </a>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                    <span class="hidden-md">
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>
                                                    </span>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </a>
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
                        </ul><!-- Main Navigation END -->
                    </div>

                    <div class="column text-center">
                        <!-- Main Logo -->
                        <a href="index.html" class="logo">
                            <span style="font-size:15px"><b>PocketStylist</b></span>
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

                            <div class="cart-container dropdown">
                                <a href="#" class="header-tools-link cart-link">
                                    <i class="material-icons message"></i>
                                    <span class="counter">24</span>
                                </a>

                                <div class="sub-menu">
                                    <div class="widget cart-widget">
                                        <div class="widget-title">
                                            Message List
                                        </div>

                                        <ul class="cart-list">
                                            <!-- Cart List Item -->
                                            <li>
                                                <a href="message" class="cart-thumb">
                                                    <img src="img/blog/04.jpg" alt="">
                                                </a>

                                                <div class="info-cont">
                                                    <a href="message" class="item-title">
                                                    エミリー
                                                    </a>

                                                    <div class="category">
                                                        初めまして！服のコーディネートで相談があります！
                                                        私の体型に合った服は無いでしょうか？！
                                                    </div>
                                                </div>
                                            </li><!-- Cart List Item END -->

                                            <!-- Cart List Item -->
                                            <li>
                                                <a href="message" class="cart-thumb">
                                                    <img src="img/shop/cart-widget/02.jpg" alt="">
                                                </a>

                                                <div class="info-cont">
                                                    <a href="message" class="item-title">
                                                        ジェシー
                                                    </a>

                                                    <div class="category">
                                                        初めまして！服のコーディネートで相談があります！
                                                        私の体型に合った服は無いでしょうか？！
                                                    </div>
                                                </div>
                                            </li><!-- Cart List Item END -->
                                            <li>
                                                <a href="message" class="cart-thumb">
                                                    <img src="img/blog/04.jpg" alt="">
                                                </a>

                                                <div class="info-cont">
                                                    <a href="message" class="item-title">
                                                        エミリー
                                                    </a>

                                                    <div class="category">
                                                        初めまして！服のコーディネートで相談があります！
                                                        私の体型に合った服は無いでしょうか？！
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                                                    <a href="product-gallery-left.html" class="item-title">SUEDE-EFFECT
                                                        JACKET</a>

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
                                                    <a href="product-gallery-left.html" class="item-title">SUEDE-EFFECT
                                                        JACKET</a>

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

                                        <a href="shopping-cart.html"
                                           class="btn btn-default btn-block margin-right-none">Go to cart</a>
                                        <a href="checkout-wizard.html"
                                           class="btn btn-default btn-block margin-right-none">Poceed to
                                            checkout</a>
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
                    <span style="font-size:15px"><b>PocketStylist</b></span>
                </a>

                <div class="mobile-tools">
                    <!-- Wishlist Link -->
                    <a href="account-wishlist.html" class="wishlist">
                        <i class="material-icons favorite"></i>
                    </a>
                    <div class="cart-container">
                        <a href="message" class="cart-link">
                            <i class="material-icons message"></i>
                            <span class="counter">24</span>
                        </a>
                    </div>

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


    @yield('content')

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
                                    <a href="#" class="btn btn-gray btn-iconed btn-lg"><i
                                                class="material-icons place"></i></a>
                                </li>
                                <li>
                                    <div style="margin-bottom: 7px;">Gift Cards</div>
                                    <a href="#" class="btn btn-gray btn-iconed btn-lg"><i
                                                class="material-icons local_activity"></i></a>
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

                            <a href="#" class="market-btn btn-appstore"
                               style="background-image: url(img/market-btns/appstore.png);"><span>Download on the</span>App
                                Store</a>

                            <a href="#" class="market-btn btn-playstore"
                               style="background-image: url(img/market-btns/playstore.png);"><span>Download it from</span>Play
                                Store</a>
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
                        <p>&copy; B-Shop 2015 - 2017. Made by <a href="http://8guild.com/" target="_blank">8Guild</a>
                            with <i class="fa fa-heart text-danger"></i> love.</p>
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
