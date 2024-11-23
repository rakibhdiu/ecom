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
                            <li class="breadcrumb-item active" aria-current="page">Billing information</li>
                        </ol>
                    </nav>
                    <h5>Billing information</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Start-->

    <!--Deliver Info Start-->
    <section class="deliver-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Dashboard-Nav  Start-->
                    <div class="dashboard-nav">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="user-dashboard.html">Account
                                    settings</a></li>
                            <li class="list-inline-item"><a href="{{ route('billing-info') }}" class="active">Billing
                                    information</a>
                            </li>
                            <li class="list-inline-item"><a href="{{ route('product-wishlist') }}">My wishlist</a></li>
                            <li class="list-inline-item"><a href="{{ route('cart-info') }}">My cart</a></li>
                            <li class="list-inline-item"><a href="{{ route('order') }}">Order</a></li>
                            <li class="list-inline-item"><a href="#" class="mr-0">Log-out</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard-Nav  End-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="deliver-info-form">
                        <h6>Billing information</h6>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Apartment, House</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div mb-0">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">City</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <select name="" id="">
                                        <option value="01">Country/Region</option>
                                        <option value="02">United States</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <select name="" id="">
                                        <option value="01">States</option>
                                        <option value="02">Chicago</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 mt-30">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Zip Code</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="email" class="form__input"
                                            placeholder="
                                        ">
                                        <label for="" class="form__label">Email</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-primary" type="submit">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Deliver Info End-->
@endsection
