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
        $ecommerces = $this->ecommerces();
        $sliders = $this->sliders();
        $hotDeals = $this->hotDeals();
        return view('index',compact('subcategories','categories','popularCategories', 'saleProducts', 'suggestedProducts', 'newProducts', 'ecommerces', 'sliders', 'hotDeals'));
    }

    public function popularCategories()
    {

        $popularCategories = DB::table('products')
            ->select('subcategories.id', 'subcategories.name', 'subcategories.image',DB::raw('COUNT(products.subcategory_id) as counts'), DB::raw('SUM(user_product_logs.no_of_clicks) as total_clicks'))
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->leftJoin('user_product_logs','products.id', '=', 'user_product_logs.product_id')
            ->groupBy('subcategories.id')
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

    public function hotDeals()
    {    
        $hotDeals = DB::table('hot_deals')
            ->select('hot_deals.product_id', 'hot_deals.deal_starts', 'hot_deals.deal_ends',  'products.regular_price', 'products.sale_price', 'product_images.image_1', 'products.title',  'ecommerces.name')
            ->join('products','hot_deals.product_id', '=', 'products.id')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','hot_deals.product_id', '=', 'product_images.product_id')
            ->get();

        return $hotDeals;
    }

    public function ecommerces()
    {
        return DB::table('ecommerces')->get();
    }

    public function sliders()
    {
        return DB::table('sliders')->get();
    }
}
