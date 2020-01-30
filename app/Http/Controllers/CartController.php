<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kala;
use App\Models\Users;
use App\Models\Basket;

class CartController extends Controller
{
    public function cart(){
        return view('cart/cart');
    }
}
