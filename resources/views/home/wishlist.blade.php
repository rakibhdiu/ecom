@extends('home.Layout.app')

@section('content')
    <!-- BreadCrumb Start-->
    <section class="breadcrumb-area mt-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                    <h5>Wishlist</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb End-->

    <!-- Wishlist Area Start -->
    <section class="wishlist-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Dashboard-Nav  Start-->
                    <div class="dashboard-nav">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="user-dashboard.html">Account
                                    settings</a></li>
                            <li class="list-inline-item"><a href="{{ route('billing-info') }}">Billing information</a></li>
                            <li class="list-inline-item"><a href="{{ route('product-wishlist') }}" class="active">My
                                    wishlist</a></li>
                            <li class="list-inline-item"><a href="{{ route('cart-info') }}">My cart</a></li>
                            <li class="list-inline-item"><a href="{{ route('order') }}">Order</a></li>
                            <li class="list-inline-item"><a href="#" class="mr-0">Log-out</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard-Nav  End-->
                </div>
            </div>
            <div class="rows">
                <!-- Wishlist Item Start -->
                <div class="cart-items">
                    <div class="header">
                        <div class="image">
                            Image
                        </div>
                        <div class="name">
                            Name
                        </div>
                        <div class="price">
                            Prices
                        </div>
                        <div class="rating">
                            Rating
                        </div>
                        <div class="info">
                            Info
                        </div>
                    </div>
                    <div class="body">
                        <div class="item">
                            <div class="image">
                                <img src="dist/images/nike-shoe.jpg">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Skechers Men's Classic Fit-Delson-Camden Sneaker</p>
                                </div>
                                <div class="button">
                                    <div class="product-pricelist-selector-button">
                                        <a class="btn cart-bg " href="{{ route('cart-info') }}">Add to cart
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <g id="Your_Bag" data-name="Your Bag" transform="translate(1)">
                                                    <g id="Icon" transform="translate(0 1)">
                                                        <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(4.773 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(12.273 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <path id="Path_3" data-name="Path 3"
                                                            d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                            transform="translate(-1 -1)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <a class="del" href="#">Remove</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>$254.99</span> <del>$499.99</del>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                            <div class="info">
                                <div class="size">
                                    <div class="product-pricelist-selector-size">
                                        <h6>Sizes</h6>
                                        <div class="sizes" id="sizes">
                                            <li class="sizes-all active">M</li>
                                        </div>
                                    </div>
                                    <div class="product-pricelist-selector-color">
                                        <h6>Colors</h6>
                                        <div class="colors" id="colors">
                                            <li class="colorall color-1 active"></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="product-pricelist-selector-quantity">
                                        <h6>quantity</h6>
                                        <div class="wan-spinner wan-spinner-4">
                                            <a href="javascript:void(0)" class="minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <path id="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                        transform="translate(-1473.296 -25.41)" fill="none"
                                                        stroke="#989ba7" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.4" />
                                                </svg>
                                            </a>
                                            <input type="text" value="1" min="1">
                                            <a href="javascript:void(0)" class="plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <g id="Arrow" transform="translate(10.99 5.7) rotate(180)">
                                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                            transform="translate(-1474.286 -26.4)" fill="none"
                                                            stroke="#1a2224" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.4" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="dist/images/nike-shoe.jpg">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Skechers Men's Classic Fit-Delson-Camden Sneaker</p>
                                </div>
                                <div class="button">
                                    <div class="product-pricelist-selector-button">
                                        <a class="btn cart-bg " href="{{ route('cart-info') }}">Add to cart
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <g id="Your_Bag" data-name="Your Bag" transform="translate(1)">
                                                    <g id="Icon" transform="translate(0 1)">
                                                        <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(4.773 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(12.273 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <path id="Path_3" data-name="Path 3"
                                                            d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                            transform="translate(-1 -1)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <a class="del" href="#">Remove</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>$254.99</span> <del>$499.99</del>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                            <div class="info">
                                <div class="size">
                                    <div class="product-pricelist-selector-size">
                                        <h6>Sizes</h6>
                                        <div class="sizes" id="sizes">
                                            <li class="sizes-all active">M</li>
                                        </div>
                                    </div>
                                    <div class="product-pricelist-selector-color">
                                        <h6>Colors</h6>
                                        <div class="colors" id="colors">
                                            <li class="colorall color-1 active"></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="product-pricelist-selector-quantity">
                                        <h6>quantity</h6>
                                        <div class="wan-spinner wan-spinner-4">
                                            <a href="javascript:void(0)" class="minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <path id="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                        transform="translate(-1473.296 -25.41)" fill="none"
                                                        stroke="#989ba7" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.4" />
                                                </svg>
                                            </a>
                                            <input type="text" value="1" min="1">
                                            <a href="javascript:void(0)" class="plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <g id="Arrow" transform="translate(10.99 5.7) rotate(180)">
                                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                            transform="translate(-1474.286 -26.4)" fill="none"
                                                            stroke="#1a2224" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.4" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="dist/images/nike-shoe.jpg">
                            </div>
                            <div class="name">
                                <div class="name-text">
                                    <p> Skechers Men's Classic Fit-Delson-Camden Sneaker</p>
                                </div>
                                <div class="button">
                                    <div class="product-pricelist-selector-button">
                                        <a class="btn cart-bg " href="#">Add to cart
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                viewBox="0 0 17 17">
                                                <g id="Your_Bag" data-name="Your Bag" transform="translate(1)">
                                                    <g id="Icon" transform="translate(0 1)">
                                                        <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(4.773 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                            cy="0.714" rx="0.682" ry="0.714"
                                                            transform="translate(12.273 13.571)" fill="none"
                                                            stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                        <path id="Path_3" data-name="Path 3"
                                                            d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                            transform="translate(-1 -1)" fill="none" stroke="#fff"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                    <a class="del" href="#">Remove</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>$254.99</span> <del>$499.99</del>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 5.0
                            </div>
                            <div class="info">
                                <div class="size">
                                    <div class="product-pricelist-selector-size">
                                        <h6>Sizes</h6>
                                        <div class="sizes" id="sizes">
                                            <li class="sizes-all active">M</li>
                                        </div>
                                    </div>
                                    <div class="product-pricelist-selector-color">
                                        <h6>Colors</h6>
                                        <div class="colors" id="colors">
                                            <li class="colorall color-1 active"></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="product-pricelist-selector-quantity">
                                        <h6>quantity</h6>
                                        <div class="wan-spinner wan-spinner-4">
                                            <a href="javascript:void(0)" class="minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <path id="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                        transform="translate(-1473.296 -25.41)" fill="none"
                                                        stroke="#989ba7" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.4" />
                                                </svg>
                                            </a>
                                            <input type="text" value="1" min="1">
                                            <a href="javascript:void(0)" class="plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.98" height="6.69"
                                                    viewBox="0 0 11.98 6.69">
                                                    <g id="Arrow" transform="translate(10.99 5.7) rotate(180)">
                                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l5,5,5-5"
                                                            transform="translate(-1474.286 -26.4)" fill="none"
                                                            stroke="#1a2224" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.4" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wishlist Item End -->
            </div>
        </div>
    </section>
    <!-- Wishlist Area End -->
@endsection
