<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index(){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();

        $popularCategories = $this->popularCategories();
        $saleProducts = $this->saleProducts();
        $suggestedProducts = $this->suggestedProducts();
        $newProducts = $this->newProducts();
        return view('index',compact('subcategories','categories','popularCategories', 'saleProducts', 'suggestedProducts', 'newProducts'));
    }

    public function popularCategories()
    {

        $popularCategories = DB::table('products')
            ->select('subcategories.id', 'subcategories.name', 'subcategories.image', DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'), DB::raw('COUNT(products.subcategory_id) as counts'))
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->join('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->groupBy('products.subcategory_id')
            ->orderBy('total_clicks', 'DESC')
            ->take(10)
            ->get();

        return $popularCategories;


        // category product count
        // $popularCategories = DB::table('subcategories')
        // ->select('subcategories.id', 'subcategories.name', 'subcategories.image', DB::raw('COUNT(products.subcategory_id) as counts'))
        // ->leftJoin('products','subcategories.id', '=', 'products.subcategory_id')
        // ->groupBy('subcategories.id')
        // ->orderBy('counts', 'DESC')
        // ->take(6)
        // ->get();

    }

    public function saleProducts()
    {

        $saleProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.sale_price', 'DESC')
            ->where('products.sale_price', '>', 0)
            ->take(10)
            ->get();

        return $saleProducts;
    }

    public function suggestedProducts()
    {

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

        return $suggestedProducts;
    }

    public function newProducts()
    {    
        $newProducts = DB::table('products')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.id', 'DESC')
            ->take(10)
            ->get();

        return $newProducts;
    }

    public function ecommerce()
    {    
        $newProducts = DB::table('ecommerces')
            ->select('products.id', 'products.title', 'products.regular_price', 'products.sale_price', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.id', 'DESC')
            ->take(10)
            ->get();

        return $newProducts;
    }
}
