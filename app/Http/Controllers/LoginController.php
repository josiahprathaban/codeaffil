<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        return view('login',compact('subcategories','categories'));
    }
}
