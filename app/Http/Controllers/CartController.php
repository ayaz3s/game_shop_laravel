<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private function getCategories(){
        return Category::all();
    }

    private function getPopular(){
        return Product::inRandomOrder()->limit(3)->get();
    }

    //
    public function show(){
        $cart = Session::get('cart');

        return view('carts.show', [
            'categories' => $this->getCategories(),
            'popular' => $this->getPopular(),
            'cart' => $cart
        ]);
    }

    public function add(Request $request){
        $productQty = $request->get('qty');
        $productID = $request->get('id');

        $product = Product::find($productID);

        $cartProduct = [
            'id' => $product->id,
            'title' => $product->title,
            'price' => $product->price,
            'qty' => $productQty
        ];

        // create/get cart in session
        $cart = Session::get('cart');

        if ($cart == null){
            $cart = array($cartProduct);
        } else {
            array_push($cart, $cartProduct);
        }
        Session::put('cart', $cart);

        return redirect()->back();
    }

    public function empty(){
        $cart = Session::get('cart');

        if ($cart){
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function update(Request $request){

        $productIDs = $request->get('id');
        $productQtys = $request->get('qty');
        $cartArr = array();

        if (!Session::get('cart')){
            return redirect()->back();
        }

        // loop through each id and get product
        for($i=0; $i<count($productIDs); $i++){
            $product = Product::find($productIDs[$i]);
            $cartProduct = [
                'id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'qty' => $productQtys[$i],
            ];
            array_push($cartArr, $cartProduct);
        }

        Session::put('cart', $cartArr);

        return redirect()->back();
    }
}
