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

                    <div class="title pull-right">Oversized Dress</div>
                </div>
            </div><!-- Page Title END -->

            <section class="fw-section margin-bottom-1x">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="single-slider">
                                <div class="thumbnail-carousel" data-slick='{"dots": false,"vertical": true, "arrows": false}'>
                                    <a href="#img01"><img src="img/product-gallery/thumb-01.jpg" alt="Thumb"></a>
                                    <a href="#img02"><img src="img/product-gallery/thumb-02.jpg" alt="Thumb"></a>
                                    <a href="#img03"><img src="img/product-gallery/thumb-03.jpg" alt="Thumb"></a>
                                    <a href="#img04"><img src="img/product-gallery/thumb-04.jpg" alt="Thumb"></a>
                                    <a href="#img05"><img src="img/product-gallery/thumb-02.jpg" alt="Thumb"></a>
                                    <a href="#img06"><img src="img/product-gallery/thumb-05.jpg" alt="Thumb"></a>
                                </div>

                                <div class="image-preview1" data-slick='{"dots": true, "arrows": false, "swipe": true}'>
                                    <img src="img/product-gallery/01.jpg" alt="Thumb">
                                    <img src="img/product-gallery/02.jpg" alt="Thumb">
                                    <img src="img/product-gallery/03.jpg" alt="Thumb">
                                    <img src="img/product-gallery/04.jpg" alt="Thumb">
                                    <img src="img/product-gallery/02.jpg" alt="Thumb">
                                    <img src="img/product-gallery/05.jpg" alt="Thumb">
                                </div>
                            </div>
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
                                <div class="cost">
                                    $250 <span>$280</span>
                                </div>
                                <div class="action-tools">
                                    <a href="#" class="market-btn btn-amazon" style="background-image: url(img/market-btns/amazon.png);"><span>Order now at</span></a>
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
                </div>
            </section>

            <section class="fw-section">
                <div class="container">
                    <hr>
                    <div class="text-center margin-bottom-2x">
                        <!-- Nav Tabs -->
                        <ul class="nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#tab1" role="tab" data-toggle="tab">
                                    Description
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" role="tab" data-toggle="tab">
                                    Reviews (2)
                                </a>
                            </li>
                        </ul><!-- Nav Tabs END -->
                    </div>

                    <!-- Tab Panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane transition fade in active" id="tab1">
                            <h5>Details:</h5>

                            <p>Increasing prosperity in our lives can be accomplished by having the right frame of mind. The truth is, our thoughts are very powerful. They are capable of influencing every aspect of our daily lives, from our physical health to our social behaviors. I’m sure you’ve heard the adage, “As you think, so shall you be.”</p>

                            <p>If we want to improve our lives, we must first improve our thoughts. Harnessing the power of thought in a positive way has the ability to create great change in our lives, including our financial well-being and prosperity. But how? How do we take something as intangible as thoughts, and manifest them into a physical reality?</p>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Things to know:</h5>

                                    <ul class="list-featured margin-top-1x">
                                        <li>Nylon</li>
                                        <li>Machine wash</li>
                                    </ul>
                                    <img src="img/clothes-tile.jpg" style="width: auto; " alt="">
                                </div>


                                <div class="col-sm-6">
                                    <h5>Things to know:</h5>

                                    <ul class="list-featured margin-top-1x">
                                        <li>Model wears: Medium</li>
                                        <li>Model height: 188cm/6'2"- Measurements taken from size Medium</li>
                                        <li>remove Chest: 22.5"</li>
                                        <li>remove Length: 29.5"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane transition fade" id="tab2">
                            <!-- Comments -->
                            <div class="comments-area">
                                <!-- Comment -->
                                <div class="comment">
                                    <div class="author-ava">
                                        <img src="img/comments-ava/01.png" alt="">
                                    </div>

                                    <div class="comment-meta-top">
                                        <span class="comment-autor"><a href="#">Bedisma</a></span>
                                        <span class="comment-date pull-right">2 days ago</span>
                                    </div><!-- .comment-meta -->

                                    <div class="comment-body">
                                        <p>Paragraph-Normal. Developed by the Intel Corporation, Bold for high-bandwidth digital content protection. As the Link name implies, HDCP is all about Semibold the integrity of various audio and video content as it travels over a Italic of different types of interfaces.</p>
                                    </div><!-- .comment-body -->

                                    <div class="comment-meta-bottom">
                      <span class="comment-reply">
                        <a href="#" rel="nofollow">Reply</a>
                      </span>
                                    </div><!-- .comment-meta-bottom -->
                                </div><!-- .comment -->

                                <!-- Comment Reply -->
                                <div class="comment depth-2">
                                    <div class="author-ava">
                                        <img src="img/comments-ava/02.png" alt="">
                                    </div>

                                    <div class="comment-meta-top">
                                        <span class="comment-autor"><a href="#">Jean Fox</a></span>
                                        <span class="comment-date pull-right">2 days ago</span>
                                    </div><!-- .comment-meta -->

                                    <div class="comment-body">
                                        <p>You have just invested in a new vehicle, the one of your dreams, and you take it on a trip across Canada. You only put gas in it and drive sightseeing and following your nose. Filters and oil changes are ignored. The car breaks down in the middle of that long stretch of road between Manitoba and Alberta.</p>
                                    </div><!-- .comment-body -->

                                    <div class="comment-meta-bottom">
                      <span class="comment-reply">
                        <a href="#" rel="nofollow">Reply</a>
                      </span>
                                    </div><!-- .comment-meta-bottom -->
                                </div><!-- .comment -->

                                <!-- Comment Form -->
                                <div class="comment-respond margin-top-2x margin-bottom-1x">
                                    <h4 class="comment-reply-title">Add Review</h4>
                                    <form method="post" id="comment-form" class="comment-form">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-alt" name="author" id="cf_name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-alt" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-alt" name="email" placeholder="Enter your website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cf_comment" class="sr-only">Review</label>
                                            <textarea name="comment" id="cf_comment" class="form-control input-alt" rows="7" placeholder="Enter your review"></textarea>
                                        </div>
                                        <p class="form-submit text-center">
                                            <button name="submit" type="submit" id="submit" class="btn btn-default">Send Review</button>
                                        </p>
                                    </form>
                                </div><!-- .comment-respond -->
                            </div><!-- .comments-area -->
                        </div>
                    </div><!-- Tab Panes END -->
                </div>
            </section>

            <section class="fw-section margin-top-3x">
                <div class="container">
                    <!-- Block Title -->
                    <h2 class="block-title text-left margin-bottom-2x">
                        Related Products
                        <small>b-shop</small>
                    </h2><!-- Block Title END -->

                    <div class="row">
                        <div class="col-md-3">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/02.jpg" alt="">

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
                                    <a href="product-gallery-left.html">ORIENTAL PRINT BODYSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Bodysuit</a>
                                        <span class="cost">$ 499</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>

                        <div class="col-md-3">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <div class="preview-carousel" data-slick='{"arrows": false, "dots": true}'>
                                        <img src="img/tiles/slider-color/01.jpg" data-color="#000" alt="">
                                        <img src="img/tiles/slider-color/02.jpg" data-color="#000" alt="">
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
                                    <a href="product-gallery-left.html">ORIENTAL PRINT BODYSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Bodysuit</a>
                                        <span class="cost">$ 499</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>

                        <div class="col-md-3">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <div class="preview-carousel" data-slick='{arrows": true, "dots": false}'>
                                        <img src="img/tiles/03.jpg" data-color="#000" alt="">
                                        <img src="img/tiles/04.jpg" data-color="#e8e8e6" alt="">
                                        <img src="img/tiles/05.jpg" data-color="#f9b996" alt="">
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
                                    <a href="product-gallery-left.html">ORIENTAL PRINT BODYSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Bodysuit</a>
                                        <span class="cost">$ 499</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>

                        <div class="col-md-3">
                            <!-- Shop Grid Tile -->
                            <div class="tile">
                                <div class="preview-box">
                                    <img src="img/tiles/01.jpg" alt="">

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
                                    <a href="product-gallery-left.html">ORIENTAL PRINT BODYSUIT</a>
                                </div>

                                <div class="tile-meta">
                                    <div class="meta-top">
                                        <a href="#" class="category">Bodysuit</a>
                                        <span class="cost">$ 499</span>
                                    </div>
                                    <div class="meta-bottom">
                                        <img src="img/rating.png" class="raty" alt="">
                                    </div>
                                </div>
                            </div><!-- Shop Grid Tile END -->
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection
