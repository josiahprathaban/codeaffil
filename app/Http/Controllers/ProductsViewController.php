<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class ProductsViewController extends Controller
{
    public function index($filterby, $value){
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();
        

        switch($filterby){
            case 'category':
                $products = $this->getByCategory($value);
                break;
            case 'subcategory':
                $products = $this->getBySubcategory($value);
                break;
            case 'ecommerce':
                $products = $this->getByEcommerce($value);
                break;
            case 'price':
                $products = $this->getByPrice($value);
                break;
        }
        
        return view('products',compact('subcategories','categories', 'ecommerces', 'products', 'value'));
    }

    public function filter(Request $request)
    {
        $subcategories = DB::table('subcategories')->get();
        $categories = DB::table('categories')->get();
        $ecommerces = DB::table('ecommerces')->get();

        switch($request->filter){
            case 'new':
                $products = $this->getByDate();
                break;
            case 'asc':
                $products = $this->getByASC();
                break;
            case 'desc':
                $products = $this->getByDESC();
                break;
            case 'stock':
                $products = $this->getByStock();
                break;
                }

        return view('products',compact('subcategories','categories', 'ecommerces', 'products'));
    }

    #check incomming variable with name from categories, subcategories, ecommerce, else filter 

    public function getByCategory($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->join('categories','subcategories.category_id', '=', 'categories.id')
            ->where('categories.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getBySubcategory($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->join('subcategories','products.subcategory_id', '=', 'subcategories.id')
            ->where('subcategories.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getByEcommerce($value)
    {
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('ecommerces.name', '=', $value)
            ->paginate(20);

        return $products;
    }

    public function getByPrice($value)
    {
        $limit = explode(" - ", str_replace('$','', $value));
        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->where('products.regular_price', '>', $limit[0])
            ->paginate(20);

        return $products;
    }

    public function getByDate()
    {

        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.updated_at', 'DESC')
            ->get();

        return $products;
    }

    public function getByStock()
    {

        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.title', 'DESC')
            ->where('stock_status', '=', 1)
            ->get();

        return $products;
    }

    public function getByDESC()
    {

        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.title', 'DESC')
            ->get();

        return $products;
    }

    public function getByASC()
    {

        $products = DB::table('products')
            ->select('products.*', 'product_images.image_1',  'ecommerces.name')
            ->join('ecommerces','products.ecommerce_id', '=', 'ecommerces.id')
            ->join('product_images','products.id', '=', 'product_images.product_id')
            ->orderBy('products.title')
            ->get();

        return $products;
    }
}
