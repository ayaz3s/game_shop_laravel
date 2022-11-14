<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

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

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:4']
        ]);

        // hash the password
        $formFields['password'] = bcrypt($formFields['password']);
        // create the user
        User::create($formFields);

        // redirect user to login page
        return redirect('/')->with('success', 'user created successfully!');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // if credentials are valid
        if (auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'user logged in successfully');
        }
        return redirect('/')->with('error', 'invalid credentials');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/')->with('success', 'user logout successfully');
    }
}
