<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SingleProdecutController extends Controller
{
    public function index($id){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        $product = $this->getProductById($id);
        return view('single-product',compact('subcategories','categories', 'ecommerces', 'product'));
    }
    
    public function getProductById($id)
    {
        $product = DB::table('products')
            ->select('products.*', 'ecommerces.logo', 'ecommerces.name as ecommerce', 'brands.name as brand', 'product_images.image_1', 'product_images.image_2', 'product_images.image_3', 'product_images.image_4', 'subcategories.name as subcategory')
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('brands','products.brand_id', '=', 'brands.id')
            ->where('products.id',$id)
            ->first();

        return $product;
            
    }
}
