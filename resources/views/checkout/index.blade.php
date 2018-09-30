@extends("layout.main")
@section("content")

<aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/cover-img-1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Checkout</h1>
                                    <h2 class="bread"><span><a href="home">Home</a></span> <span><a href="cart">Shopping Cart</a></span> <span>Checkout</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-shop">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-10 col-md-offset-1">
                    <div class="process-wrap">
                        <div class="process text-center active">
                            <p><span>01</span></p>
                            <h3>Shopping Cart</h3>
                        </div>
                        <div class="process text-center active">
                            <p><span>02</span></p>
                            <h3>Checkout</h3>
                        </div>
                        <div class="process text-center">
                            <p><span>03</span></p>
                            <h3>Order Complete</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form method="post" class="colorlib-form">
                        <h2>Billing Details</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Select Country</label>
                                    <div class="form-field">
                                        <i class="icon icon-arrow-down3"></i>
                                        <select name="people" id="people" class="form-control">
                                            <option value="#">Select country</option>
                                            <option value="#">Alaska</option>
                                            <option value="#">China</option>
                                            <option value="#">Japan</option>
                                            <option value="#">Korea</option>
                                            <option value="#">Philippines</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" id="companyname" class="form-control" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fname">Address</label>
                                    <input type="text" id="address" class="form-control" placeholder="Enter Your Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="address2" class="form-control" placeholder="Second Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="companyname">Town/City</label>
                                    <input type="text" id="towncity" class="form-control" placeholder="Town or City">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="stateprovince">State/Province</label>
                                    <input type="text" id="fname" class="form-control" placeholder="State Province">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Zip/Postal Code</label>
                                    <input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="email">E-mail Address</label>
                                    <input type="text" id="email" class="form-control" placeholder="State Province">
                                </div>
                                <div class="col-md-6">
                                    <label for="Phone">Phone Number</label>
                                    <input type="text" id="zippostalcode" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio">Create an Account? </label>
                                        <label><input type="radio" name="optradio"> Ship to different address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="cart-detail">

                        <h2>Cart Total</h2>
                        <ul>
                            <li>
                                <span>Subtotal</span> <span>$100.00</span>
                                <ul>
                                    <li><span>1 x Product Name</span> <span>$99.00</span></li>
                                    <li><span>1 x Product Name</span> <span>$78.00</span></li>
                                </ul>
                            </li>
                            <li><span>Shipping</span> <span>$0.00</span></li>
                            <li><span>Order Total</span> <span>$180.00</span></li>
                        </ul>
                    </div>
                    {{--<div class="cart-detail">--}}
                        {{--<h2>Payment Method</h2>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="radio">--}}
                                    {{--<label><input type="radio" name="optradio">Direct Bank Tranfer</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="radio">--}}
                                    {{--<label><input type="radio" name="optradio">Check Payment</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="radio">--}}
                                    {{--<label><input type="radio" name="optradio">Paypal</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label><input type="checkbox" value="">I have read and accept the terms and conditions</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <form id="order-form" action="" type="POST">

                        <div class="row">
                            <div class="col-md-12">
                                <p><button type="submit" class="btn btn-primary">Place an order</button></p>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Recommended Products</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-5.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-6.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-7.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(images/item-8.jpg);">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">Floral Dress</a></h3>
                            <p class="price"><span>$300.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="colorlib-subscribe">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-6 text-center">
                        <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
                    </div>
                    <div class="col-md-6">
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection("content")


