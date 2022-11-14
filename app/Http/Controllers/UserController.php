<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private function getPopular(){
        return Product::inRandomOrder()->limit(3)->get();
    }

    public function create(){

        $cart = Session::get('cart');

        return view('users.create', [
            'categories' => Category::all(),
            'popular' => $this->getPopular(),
            'cart' => $cart
        ]);
    }
}
