<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompareController extends Controller
{
    public function index($title){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.*')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('products.title', '=', $title)
            ->get();

        return view('compare',compact('subcategories','categories', 'ecommerces', 'products'));
    }


}
