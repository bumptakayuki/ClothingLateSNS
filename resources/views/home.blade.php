@extends('layouts.app')

@section('content')

        <main>
            <section class="fw-setion">
                <div class="rev_slider_wrapper">
                    <div id="slider1" class="rev_slider" data-version="5.0">
                        <ul>
                            <li data-transition="fade">

                                <img src="img/slider/02.jpg" alt="">


                                <div class="tp-caption rs-parallaxlevel-2"


                                     data-x="right" data-hoffset="['460','230','160','70']"
                                     data-y="center" data-voffset="['-80','-30','-35','40']"
                                     data-fontsize="['77','50','45','30']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"

                                     data-responsive_offset="on"
                                     data-start="500"

                                     style="font-style: italic;">Pocket
                                </div>

                                <div class="tp-caption rs-parallaxlevel-1"
                                     data-x="right" data-hoffset="['200','50','20','30']"
                                     data-y="center" data-voffset="['30','50','25','80']"
                                     data-fontsize="['173','120','95','60']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"

                                     data-responsive_offset="on"
                                     data-start="800"

                                     style="color: #efbb1d;">Stylist
                                </div>

                                <div class="tp-caption"
                                     data-x="right" data-hoffset="['380','150','100','40']"
                                     data-y="center" data-voffset="['200','150','125','180']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:500;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;e:Power3.easeInOut"
                                     data-responsive_offset="on"
                                     data-start="1000">

                                    <a href="http://8guild.com" class="btn btn-arrow">Detail</a>
                                </div>
                            </li>
                            <li data-transition="fade">

                                <img src="img/slider/01.jpg" alt="">

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

                                     style="color: #fff;">2017
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

                                <img src="img/slider/03.jpg" alt="">

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
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                   class="btn btn-iconed"><i
                                                            class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons message"></i></a>
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
                                            <img src="img/tiles/12.jpg" alt="">
                                            <img src="img/tiles/13.jpg" alt="">
                                        </div>

                                        <div class="preview-meta">
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                   class="btn btn-iconed"><i
                                                            class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons message"></i></a>
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
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                   class="btn btn-iconed"><i
                                                            class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons message"></i></a>
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
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons favorite_border"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                   class="btn btn-iconed"><i
                                                            class="material-icons zoom_out_map"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons swap_horiz"></i></a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn btn-iconed"><i
                                                            class="material-icons shopping_cart"></i></a>
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
                                <img src="img/tiles/slider-color/01.jpg" alt="">

                                <div class="preview-meta">
                                    <div>
                                        <a href="#" class="btn btn-iconed"><i
                                                    class="material-icons favorite_border"></i></a>
                                    </div>
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#quickPreview"
                                           class="btn btn-iconed"><i class="material-icons zoom_out_map"></i></a>
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

            <section class="fw-section no-cover bg-gray padding-top-4x padding-bottom-2x"
                     style="background-image: url(img/homes/02.jpg); background-position: center bottom;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding-top-3x">
                                        <span>Explore editors looks</span>
                                        <h2>Almost Summer Editorial</h2>

                                        <p>Most people consider hair combing a routine activity. There are people who
                                            keep a particular hair style throughout their life.</p>

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
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons favorite_border"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                       class="btn btn-iconed"><i
                                                                class="material-icons zoom_out_map"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons swap_horiz"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons shopping_cart"></i></a>
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
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons favorite_border"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" data-toggle="modal" data-target="#quickPreview"
                                                       class="btn btn-iconed"><i
                                                                class="material-icons zoom_out_map"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons swap_horiz"></i></a>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-iconed"><i
                                                                class="material-icons shopping_cart"></i></a>
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

            <section class="fw-section no-cover padding-top-4x margin-bottom-2x"
                     style="background-image: url(img/homes/01.jpg)">
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
                                            <img src="img/blog/zasshi3.jpg" alt="">
                                        </div>

                                        <div class="tile-title">
                                            <a href="blog-single.html">CamCamで取り上げて頂きました。</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">CamCamで取り上げて頂きました。</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i
                                                            class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="preview-box">
                                            <img src="img/blog/zasshi2.jpg" alt="">
                                        </div>

                                        <div class="tile-title">
                                            <a href="blog-single.html">CamCamで取り上げて頂きました。</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">CamCamで取り上げて頂きました。</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i
                                                            class="material-icons favorite"></i>345</span>
                                            </div>
                                        </div>
                                    </div><!-- Blog Tile END -->
                                </div><!-- Grid Item END -->

                                <!-- Grid Item -->
                                <div class="grid-item">
                                    <!-- Blog Tile -->
                                    <div class="tile tile-blog">
                                        <div class="preview-box">
                                            <img src="img/blog/zasshi5.jpg" alt="">
                                        </div>

                                        <div class="tile-title">
                                            <a href="blog-single.html">CamCamで取り上げて頂きました。</a>
                                        </div>

                                        <div class="tile-meta">
                                            <div class="meta-top">
                                                <span class="date">July 21, 2016</span>
                                                <span class="place">New York City</span>
                                                <a href="#" class="name">by Bedismo</a>
                                            </div>

                                            <p class="tile-text">CamCamで取り上げて頂きました。</p>

                                            <div class="meta-bottom">
                                                <a href="#" class="comments-qty">36 Comments </a>
                                                <span class="likes-qty"><i
                                                            class="material-icons favorite"></i>345</span>
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
                                <p class="bwi-text">
                                    ユーザも自分の着ている商品を売ることができます
                                </p>
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
                                <p class="bwi-text">不明点があれば気軽にご連絡ください</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box-with-icon text-center">
                            <div class="bwi-inner">
                                <div class="bwi-icon">
                                    <img src="img/bwi-img/01.png" alt="">
                                </div>
                                <h3 class="bwi-title">Gift Card</h3>
                                <p class="bwi-text">ギフトカードがついてきます</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Elements block -->
            </section>

            <section class="fw-section bg-default margin-bottom-3x">
                <!-- Item Carousel -->
                <div class="items-carousel"
                     data-slick='{"arrows": false, "dots": false, "slidesToShow": 6, "autoplay": true, "autoplaySpeed": 2000}'>
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

            {{--<section class="fw-section margin-bottom-3x">--}}
            {{--<div class="container">--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
            {{--<div class="tile tile-banner">--}}
            {{--<a href="#" class="preview-box">--}}
            {{--<img src="img/tiles/banner/01.jpg" alt="">--}}

            {{--<div class="banner-meta text-light text-center">--}}
            {{--<h4 class="title">Cartoon Bags</h4>--}}
            {{--<span>Explore Must Have Bags</span>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4">--}}
            {{--<div class="tile tile-banner">--}}
            {{--<a href="#" class="preview-box">--}}
            {{--<img src="img/tiles/banner/02.jpg" alt="">--}}

            {{--<div class="banner-meta text-light text-center">--}}
            {{--<h4 class="title">New Lifestyle</h4>--}}
            {{--<span>Explore Must Have Bags</span>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4">--}}
            {{--<div class="tile tile-banner">--}}
            {{--<a href="#" class="preview-box">--}}
            {{--<img src="img/tiles/banner/03.jpg" alt="">--}}

            {{--<div class="banner-meta text-light text-center">--}}
            {{--<h4 class="title">Back to 80`s</h4>--}}
            {{--<span>Explore Must Have Bags</span>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</section>--}}

            <section class="fw-section">
                <div class="container-fluid">
                    <!-- Block Title -->
                    <h2 class="block-title text-center margin-bottom-2x">
                        Insta
                        <small>Follow Us</small>
                    </h2><!-- Block Title END -->

                    <div class="row">
                        <div class="col-sm-2">
                            <!-- Insta Tile -->
                            <div class="tile tile-insta">
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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
                                <a href="https://www.instagram.com/stylistmagazine/" class="preview-box">
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

            <section class="fw-section margin-top-1x padding-top-3x padding-bottom-3x"
                     style="background-image: url(img/homes/03.jpg)">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="text-default">Newsletter Sign Up</h4>
                            <p>Just fill in your details below and let us keep you up to date with the latest news,
                                events and stories from Sophie Hulme</p>

                            <input type="text" class="form-control text-center margin-bottom-none"
                                   placeholder="Enter your name">
                            <input type="text" class="form-control text-center" style="margin-top: 10px"
                                   placeholder="Enter your email">

                            <a href="#" class="btn btn-arrow margin-right-none">Subscribe</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection
