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
        $suggestedProducts = $this->suggestedProducts();
        $sameCategoryProducts = $this->sameCategoryProducts($id);
        return view('single-product',compact('subcategories','categories', 'ecommerces', 'product', 'suggestedProducts', 'sameCategoryProducts', 'id'));
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

    public function suggestedProducts()
    {

        if(session('user')){
        $customer_id = DB::table('customers')->where('username', session('user'))->value('id');

        $suggestedProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->orderBy('user_product_logs.no_of_clicks', 'DESC')
            ->where('user_product_logs.customer_id', '=', $customer_id)
            ->take(10)
            ->get();
        }
        else{
            $suggestedProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->orderBy('user_product_logs.no_of_clicks', 'DESC')
            ->take(10)
            ->get();
        }

        return $suggestedProducts;
    }

    public function sameCategoryProducts($id)
    {
        $cat_id = DB::table('products')->where('id', $id)->value('subcategory_id');

        $sameCategoryProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('products.subcategory_id', '=', $cat_id)
            ->take(10)
            ->get();

        return $sameCategoryProducts;
    }
}
