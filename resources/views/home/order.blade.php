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
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                        </ol>
                    </nav>
                    <h5>Order</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Start-->
    <main>
        <!-- Order Area Start -->
        <section class="order-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Dashboard-Nav  Start-->
                        <div class="dashboard-nav">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="user-dashboard.html">Account
                                        settings</a></li>
                                <li class="list-inline-item"><a href="{{ route('billing-info') }}">Billing information</a>
                                </li>
                                <li class="list-inline-item"><a href="{{ route('product-wishlist') }}">My wishlist</a></li>
                                <li class="list-inline-item"><a href="{{ route('cart-info') }}">My cart</a></li>
                                <li class="list-inline-item"><a href="{{ route('order') }}" class="active">Order</a></li>
                                <li class="list-inline-item"><a href="#" class="mr-0">Log-out</a></li>
                            </ul>
                        </div>
                        <!-- Dashboard-Nav  End-->
                    </div>
                </div>
                <div class="rows">
                    <!-- Order Item Start -->
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
                                        <a class="btn bg-primary" href="billing-information.html">Checkout now</a>
                                        <a class="cart-btn" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                                viewBox="0 0 20 18">
                                                <g id="Heart" transform="translate(1 1)">
                                                    <path id="Heart-2" data-name="Heart"
                                                        d="M18.161,4.413a4.674,4.674,0,0,0-6.7,0l-.913.93-.913-.93a4.675,4.675,0,0,0-6.7,0,4.893,4.893,0,0,0,0,6.828l.913.93L10.548,19l6.7-6.828.913-.93a4.892,4.892,0,0,0,0-6.828Z"
                                                        transform="translate(-1.549 -2.998)" fill="#fff" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="del" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>$254.99</span> <del>$499.99</del>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i> 5.0
                                </div>
                                <div class="info status">
                                    <div class="status-timer">
                                        <h6>
                                            Pending
                                        </h6>
                                        <ul>
                                            <li>1
                                                <p>Day</p>
                                            </li>
                                            <li>19
                                                <p>Hours</p>
                                            </li>
                                            <li>34
                                                <p>Min</p>
                                            </li>
                                        </ul>
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
                                        <a class="btn bg-primary" href="billing-information.html">Checkout now</a>
                                        <a class="cart-btn" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                                viewBox="0 0 20 18">
                                                <g id="Heart" transform="translate(1 1)">
                                                    <path id="Heart-2" data-name="Heart"
                                                        d="M18.161,4.413a4.674,4.674,0,0,0-6.7,0l-.913.93-.913-.93a4.675,4.675,0,0,0-6.7,0,4.893,4.893,0,0,0,0,6.828l.913.93L10.548,19l6.7-6.828.913-.93a4.892,4.892,0,0,0,0-6.828Z"
                                                        transform="translate(-1.549 -2.998)" fill="#fff" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="del" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>$254.99</span> <del>$499.99</del>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i> 5.0
                                </div>
                                <div class="info status">
                                    <div class="status-timer">
                                        <h6>
                                            Pending
                                        </h6>
                                        <ul>
                                            <li>1
                                                <p>Day</p>
                                            </li>
                                            <li>19
                                                <p>Hours</p>
                                            </li>
                                            <li>34
                                                <p>Min</p>
                                            </li>
                                        </ul>
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
                                        <a class="btn bg-primary" href="billing-information.html">Checkout now</a>
                                        <a class="cart-btn" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                                viewBox="0 0 20 18">
                                                <g id="Heart" transform="translate(1 1)">
                                                    <path id="Heart-2" data-name="Heart"
                                                        d="M18.161,4.413a4.674,4.674,0,0,0-6.7,0l-.913.93-.913-.93a4.675,4.675,0,0,0-6.7,0,4.893,4.893,0,0,0,0,6.828l.913.93L10.548,19l6.7-6.828.913-.93a4.892,4.892,0,0,0,0-6.828Z"
                                                        transform="translate(-1.549 -2.998)" fill="#fff"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="del" href="#">Delete</a>
                                    </div>
                                </div>
                                <div class="price">
                                    <span>$254.99</span> <del>$499.99</del>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i> 5.0
                                </div>
                                <div class="info status">
                                    <div class="status-timer">
                                        <h6>
                                            Pending
                                        </h6>
                                        <ul>
                                            <li>1
                                                <p>Day</p>
                                            </li>
                                            <li>19
                                                <p>Hours</p>
                                            </li>
                                            <li>34
                                                <p>Min</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order Item End -->
                </div>
            </div>
        </section>
        <!-- Order Area End -->
    </main>
@endsection
