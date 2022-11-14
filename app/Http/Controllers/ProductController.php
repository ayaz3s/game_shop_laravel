<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    private function getCategories(){
        return Category::all();
    }

    private function getPopular(){
        return Product::inRandomOrder()->limit(3)->get();
    }

    public function index(){
        // dd(Category::find(1)->products);
        // dd(Order::find(3)->product);
        // dd(Product::find(1)->orders);

//        dd(Session::all());

        $cart = Session::get('cart');

        return view('products.index', [
            'products' => Product::all(),
            'categories' => self::getCategories(),
            'popular' => $this->getPopular(),
            'cart' => $cart
        ]);
    }

    public function show(Product $product){

        $cart = Session::get('cart');

        return view('products.show', [
            'product' => $product,
            'categories' => self::getCategories(),
            'popular' => $this->getPopular(),
            'cart' => $cart
        ]);
    }

}
