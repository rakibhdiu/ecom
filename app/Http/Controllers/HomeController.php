<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function billingInformation(){
        return view('home.billing-info');
    }

    public function cartInfo(){
        return view('home.cart');
    }
    public function deliveryInfo(){
        return view('home.deliver-info');
    }
    public function order(){
        return view('home.order');
    }

    public function productDetails(){
        return view('home.product-details');
    }

    public function wishlist(){
        return view('home.wishlist');
    }
}
