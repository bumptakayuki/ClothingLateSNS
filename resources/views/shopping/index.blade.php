@extends('layouts.app')

@section('content')

    <main>
        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.html">Home</a>
                    <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                    <a href="#">Shop</a>
                    <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                    <span>Cart</span>
                </div>

                <div class="title pull-right">Shopping Cart</div>
            </div>
        </div><!-- Page Title END -->

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="items-table">
                            <tr>
                                <th>Product</th>
                                <th>Details</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/cart-items/01.jpg" class="item-thumb" alt="">
                                </td>
                                <td class="item-info">
                                    <a href="product-gallery-left.html" class="title">LOONEY TUNES DENIM JACKET</a>
                                    <a href="#" class="category">Bodysuit</a>
                                    <div class="rating">
                                        <img src="img/rating.png" alt="" />
                                    </div>
                                    <span>$ 555</span>
                                    <span class="color">Color <span style="background-color: #cabeae;"></span></span>
                                    <span class="size">Size <span>XXL</span></span>
                                </td>
                                <td>
                                    <div class="select inline">
                                        <select name="select">
                                            <option>Qty 11</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <span>$ 555</span>

                                    <div class="remove">
                                        <a href="#" class="btn btn-gray btn-iconed"><i class="material-icons delete_forever"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/cart-items/02.jpg" class="item-thumb" alt="">
                                </td>
                                <td class="item-info">
                                    <a href="product-gallery-left.html" class="title">ORIENTAL PRINT BODYSUIT</a>
                                    <a href="#" class="category">Bodysuit</a>
                                    <div class="rating">
                                        <img src="img/rating.png" alt="" />
                                    </div>
                                    <span>$ 555</span>
                                    <span class="color">Color <span style="background-color: #cabeae;"></span></span>
                                    <span class="size">Size <span>XXL</span></span>
                                </td>
                                <td>
                                    <div class="select inline">
                                        <select name="select">
                                            <option>Qty 11</option>
                                            <option>option 1</option>
                                            <option>option 2</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <span>$ 555</span>

                                    <div class="remove">
                                        <a href="#" class="btn btn-gray btn-iconed"><i class="material-icons delete_forever"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="cart-bottom-tools">
                        <input type="text" class="form-control" style="max-width: 270px;" placeholder="Enter coupon">

                        <a href="#" class="btn btn-default">Apply</a>
                        <a href="#" class="btn btn-default update">Update Cart</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Sidebar -->
                    <aside class="sidebar">
                        <!-- Cart Total Widget -->
                        <div class="widget cart-total bg-gray">
                            <div class="total-title">Cart Total</div>

                            <div class="list margin-bottom-1x">
                                <div class="item">
                                    <span>Total products</span>
                                    <span>$ 5466</span>
                                </div>

                                <div class="item">
                                    <span>Shipping</span>
                                    <span>Free Shipping</span>
                                </div>

                                <div class="item">
                                    <span>Total tax</span>
                                    <span>$ 4</span>
                                </div>

                                <div class="item">
                                    <span>Total</span>
                                    <span>$ 5470</span>
                                </div>
                            </div>

                            <a href="#" class="btn btn-default btn-block">
                                Poceed to checkout
                            </a>
                        </div><!-- Cart Total Widget END -->

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
                    </aside><!-- Sidebar END -->
                </div>
            </div>
        </div><!-- Content END -->
    </main>
@endsection
