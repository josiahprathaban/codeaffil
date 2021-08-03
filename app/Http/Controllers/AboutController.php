<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        return view('about',compact('subcategories','categories'));
    }
}
