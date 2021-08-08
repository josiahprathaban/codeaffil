<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        return view('login',compact('subcategories','categories', 'ecommerces'));
    }

    public function register(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        return view('register',compact('subcategories','categories', 'ecommerces'));
    }

    public function redirect()
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $redirect = url()->previous();
        return view('login',compact('subcategories','categories', 'ecommerces', 'redirect'));
    }
}
