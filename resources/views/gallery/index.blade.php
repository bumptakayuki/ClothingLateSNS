@extends('layouts.app')

@section('content')

    <main>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>
                    <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                    <span>Shop</span>
                </div>

                <div class="title pull-right">Wishlist</div>
            </div>
        </div><!-- Page Title END -->

        <!-- Content -->
        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <div class="preview-carousel" data-slick='{"arrows": false, "dots": true}'>
                                        <img src="img/tiles/slider-color/01.jpg" data-color="#8a7b50" alt="">
                                        <img src="img/tiles/slider-color/02.jpg" data-color="#e9e4e0" alt="">
                                    </div>

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">Oversize patchwork parka</a>
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

                        <div class="col-md-4">
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
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">QUILTED ANORAK</a>
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

                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/02.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">Zipped Jacket</a>
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

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/03.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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

                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/04.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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

                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/06.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">LONG CROSSOVER JUMPSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Basics</a>
                                        <span class="cost">$ 579</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <div class="preview-carousel" data-slick='{arrows": true, "dots": false}'>
                                        <img src="img/tiles/slider-carousel/04.jpg" alt="">
                                        <img src="img/tiles/slider-carousel/05.jpg" alt="">
                                        <img src="img/tiles/slider-carousel/06.jpg" alt="">
                                        <img src="img/tiles/slider-carousel/07.jpg" alt="">
                                    </div>

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">DOUBLE-BREASTED COAT</a>
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

                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/07.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">t-shirt</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Gymwear</a>
                                        <span class="cost">$ 130</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>

                        <div class="col-md-4">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/08.jpg" alt="">

                                    <div class="preview-meta">
                                        <div>
                                            <a href="#" class="btn btn-iconed"><i class="material-icons delete_forever"></i></a>
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
                                    <a href="#">SHORT SHINY JUMPSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Basics</a>
                                        <span class="cost">$ 375</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <!-- Widget Search -->
                        <div class="widget search">
                            <i class="icon material-icons search"></i>
                            <input type="text" class="form-control input-sm" placeholder="Search Shop">
                        </div><!-- Widget Search END -->

                        <!-- Widget Categories -->
                        <div class="widget categories-widget">
                            <div class="widget-title">
                                Categories
                            </div>

                            <ul class="cat-list">
                                <li>
                                    <a href="#" title="">Running</a>
                                    <span>21</span>
                                </li>
                                <li>
                                    <a href="#" title="">Lifestyle</a>
                                    <span>12</span>
                                </li>
                                <li>
                                    <a href="#" title="">Training</a>
                                    <span>43</span>
                                </li>
                                <li>
                                    <a href="#" title="">Walking</a>
                                    <span>43</span>
                                </li>
                                <li>
                                    <a href="#" title="">Baseball</a>
                                    <span>33</span>
                                </li>
                                <li>
                                    <a href="#" title="">Hiking &amp; Trail</a>
                                    <span>76</span>
                                </li>
                                <li>
                                    <a href="#" title="">Soccer</a>
                                    <span>82</span>
                                </li>
                                <li>
                                    <a href="#" title="">Tennis</a>
                                    <span>28</span>
                                </li>
                            </ul>
                        </div><!-- Widget Categories END -->

                        <!-- Latest Product List -->
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

                                            <span class="cost">$ 140</span>
                                        </div>
                                    </div>
                                </li><!-- Cart List Item END -->

                                <!-- Cart List Item -->
                                <li>
                                    <a href="product-gallery-left.html" class="cart-thumb">
                                        <img src="img/shop/cart-widget/03.jpg" alt="">
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
                                        <img src="img/shop/cart-widget/04.jpg" alt="">
                                    </a>

                                    <div class="info-cont">
                                        <a href="product-gallery-left.html" class="item-title">SUEDE-EFFECT JACKET</a>

                                        <div class="category">
                                            Skirts

                                            <span class="cost">$140</span>
                                        </div>
                                    </div>
                                </li><!-- Cart List Item END -->
                            </ul>
                        </div><!-- Latest Product List END -->

                        <!-- Popular Tags -->
                        <div class="widget tags-list-widget">
                            <div class="widget-title">
                                Popular Tags
                            </div>

                            <div class="tags-list">
                                <a href="#">Clothes</a>
                                <a href="#">Boots</a>
                                <a href="#">Skirts</a>
                            </div>
                        </div><!-- Popular Tags END -->

                        <!-- Categories Filter -->
                        <div class="widget categories-widget">
                            <div class="widget-title">
                                Categories
                            </div>

                            <ul class="cat-list">
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Running
                                    </label>
                                    <span>21</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Lifestyle
                                    </label>
                                    <span>12</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Training
                                    </label>
                                    <span>43</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Walking
                                    </label>
                                    <span>43</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Baseball
                                    </label>
                                    <span>33</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Hiking &amp; Trail
                                    </label>
                                    <span>76</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Soccer
                                    </label>
                                    <span>82</span>
                                </li>
                                <li>
                                    <label class="checkbox">
                                        <input type="checkbox"> Tennis
                                    </label>
                                    <span>28</span>
                                </li>
                            </ul>
                        </div><!-- Categories Filter END -->

                    </aside><!-- Sidebar END -->
                </div>
            </div>
        </div><!-- Content END -->
    </main>
@endsection
